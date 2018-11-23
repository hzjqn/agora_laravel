<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class _ArticleController extends Controller
{
    public function create(Request $request){
        $response = [];
        try{
            $article = Article::create($request->except('_token'));
            $response['status'] = 'ok';
            $response['article'] = $article->toArray();
        } catch (Exception $e) {
            $response['status'] = 'error';
            $response['message'] = $e->message();
        }

        return response()->json($response);
    }
}
