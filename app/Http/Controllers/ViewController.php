<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Article;
use App\Follow;

class ViewController extends Controller
{
    //
    public function index(){
        $allArticles = Article::all()->reverse()->take(100);
        return view('index', compact('allArticles'));
    }
}
