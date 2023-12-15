<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
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
