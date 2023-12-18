<?php

use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('TesteCards');
});


Route::prefix('noticias')->group(function () {
    Route::get('/all', [NoticiaController::class, 'index']);
    Route::get('/create', [NoticiasController::class, 'create']);
    Route::post('/', [NoticiaController::class, 'store'])->name('salvar-noticia')->middleware([HandlePrecognitiveRequests::class]);
    // Route::get('/show/{id}', [NoticiaController::class, 'show']);
    Route::get('/show', function () {
        return Inertia::render('Noticia/Show');
    });
    Route::get('/edit/{id}', [NoticiaController::class, 'edit']);
    Route::put('/edit/{id}', [NoticiaController::class, 'update'])->name('atualizar-noticia')->middleware([HandlePrecognitiveRequests::class]);
    Route::delete('/delete/{id}', [NoticiaController::class, 'destroy'])->name('excluir-noticia')->middleware([HandlePrecognitiveRequests::class]);
});


//Exemplo header e card template tailwind awesome
Route::get('/welcome', function () {
    return Inertia::render('Welcome');
});


//Testando os cards de noticias
Route::get('/testeCards', function () {
    return Inertia::render('TesteCards');
});