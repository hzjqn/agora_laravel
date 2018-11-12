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
        $articles = Article::all()->reverse()->take(100);
        $follows = Follow::all()->reverse()->take(100);
        $last_actions = collect([$articles, $follows])->collapse()->take(25);
        return view('index', compact('last_actions'));
    }
}
