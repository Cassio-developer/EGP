<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
   
   

    
    public function login()
    {
       
        return Inertia::render('Paginas/Home/Usuario/Login', [
           
        ]);
    }
}
