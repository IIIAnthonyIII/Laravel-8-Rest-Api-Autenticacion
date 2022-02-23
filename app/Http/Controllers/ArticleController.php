<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return \response($articles);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required|max:255',
        ]);

        $article = Article::create($request->all());
        return \response($article);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return \response($article);
    }

    public function update(Request $request, $id)
    {
        Article::findOrFail($id)->update($request->all());
        return \response("La tarea con el id: ${id} ha sido actualizada");
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return \response("La tarea con el id: ${id} ha sido eliminada");
    }
}