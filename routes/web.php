<?php

use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});


Route::prefix('publicacoes')->group(function () {
    Route::get('/detalhes', function () {
        return Inertia::render('Publicacao/Detalhes', ['publicacao' => ['titulo' => 'Teste', 'createdAt' => '10/10/2010', 'imagem' =>'https://picsum.photos/id/238/1920/1080', 'legenda' => 'legenda teste']]);
    });
});

//Exemplo header e card template tailwind awesome
Route::get('/welcome', function () {
    return Inertia::render('Welcome');
});
