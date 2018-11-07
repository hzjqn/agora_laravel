<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Article;

class ViewController extends Controller
{
    //
    public function index(){
        $last_articles = Article::all()->reverse()->take(10);
        return view('index', compact('last_articles'));
    }
}
