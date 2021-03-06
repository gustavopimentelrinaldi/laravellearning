<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }


    public function show($id){
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
