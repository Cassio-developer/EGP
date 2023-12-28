<?php

use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\AdminController;


use App\Http\Controllers\HomeController;

require(base_path('routes/app/admin-web.php'));

Route::get('/', function () {
    return Inertia::render('TesteCards');
});


Route::prefix('publicacoes')->group(function () {
    Route::get('/detalhes', function () {
        return Inertia::render('Publicacao/Detalhes', ['publicacao' => ['titulo' => 'Teste', 'createdAt' => '10/10/2010', 'imagem' =>'https://picsum.photos/id/238/1920/1080', 'legenda' => 'legenda teste', 'conteudo' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum']]);
    });
});

//Exemplo header e card template tailwind awesome
Route::get('/welcome', function () {
    return Inertia::render('Welcome');
});


//Testando os cards de noticias
Route::get('/testeCards', function () {
    return Inertia::render('TesteCards');
});

//Testando os cards de noticias com 2 imagens grandes antes do grid de 3. (estilo EGP Jundiaí)
Route::get('/testeCards2', function () {
    return Inertia::render('TesteCards2');
});


//Testando os cards de noticias com 2 cards grandes antes do grid de 3. (estilo EGP Jundiaí)
Route::get('/testeCards3', function () {
    return Inertia::render('TesteCards3');
});

//Testando os cards de noticias sem as tags
Route::get('/testeCardsSemTags', function () {
    return Inertia::render('TesteCardsSemTags');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/login', [HomeController::class, 'login'])->name('usuario.login');

Route::get('/login/admin', [AdminController::class, 'login'])->name('admin.login');


Route::post('/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');