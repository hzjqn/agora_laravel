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
        $subArticles = [];

        if(Auth::user()){
            $subs = Auth::user()->following;
            foreach($subs as $sub){
                $subArticles[] = $sub->articles->last();
            }
        } else {
            $allArticles = Article::all()->reverse()->take(5);
        }
        $mostPopularArticles = Article::all()->reverse()->take(5);

        return view('index', compact('subArticles', 'allArticles', 'mostPopularArticles'));
    }
}
