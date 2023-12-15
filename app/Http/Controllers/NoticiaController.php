<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class NoticiaController extends Controller
{
    public function index() {
        return Inertia::render('Noticia/Index', [
            'noticias' => Noticia::all(),
        ]);
    }

    public function create() {
        return Inertia::render('Noticia/Create');
    }

    public function store(StoreNoticiaRequest $request) {
        $validarNoticia = $request->validated();
        Noticia::create($validarNoticia);
        return redirect()->intended('/noticias/all');
    }

    public function show(string $id) {
        $noticia = Noticia::findOrFail($id);
        return Inertia::render('Noticia/Show', ['noticia' => $noticia]);
    }

    public function edit(string $id) {
        $noticia = Noticia::findOrFail($id);
        return Inertia::render('Noticia/Edit', ['noticia' => $noticia]);
    }

    public function update(StoreNoticiaRequest $request, String $id) {
        $validarNoticia = $request->validated();
        Noticia::findOrFail($id)->update($validarNoticia);
        return redirect()->intended('/noticias/all');
    }

    public function destroy(string $id) {
        Noticia::findOrFail($id)->delete();
        return redirect()->intended('/noticias/all');
    }
}
