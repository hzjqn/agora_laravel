<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Article;
use App\Follow;

class ViewController extends Controller
{
    //
    public function index(){
        $allArticles = Article::all()->reverse()->take(5);
        $mostPopularArticles = Article::all()->reverse()->take(5);

        return view('index', compact('subArticles', 'allArticles', 'mostPopularArticles'));
    }

    public function faq(){
        return view('faq');
    }

    public function privacy(){
        return view('privacy');
    }
}
