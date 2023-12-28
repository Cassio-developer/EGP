<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function login()
    {
        return Inertia::render('Paginas/Admin/Login');
    }


    public function logout(Request $request)
    {  
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }


    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
    
            if ($user->approved == 1) {
                return redirect()->route('admin.users');
            } else {
                return Inertia::render('Paginas/Admin/Login', [
                    'status' => 'Sua conta ainda não foi aprovada. Entre em contato com o administrador.',
                ]);
            }
        } elseif (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return Inertia::render('Paginas/Admin/Login', [
                'status' => 'E-mail ou senha inválida.',
            ]);
        }
    
}

public function users()
    {
        $user = auth('admin')->user(); 
      
         return Inertia::render('Paginas/Admin/UsuariosAdministradores', [
            'admin_level' => $user->admin_level,
            'user' => $user,
        ]);
        
    }
    

}
