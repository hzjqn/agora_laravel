<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class _ArticleController extends Controller
{
    public function create(Request $request){
        $response = [];
        try{
            $path = str_replace('public','storage', $request->file('cover')->store('public/cover'));
            $article = Article::create(['title' => $request->input('title'), 'content' => $request->input('content'), 'user_id' => $request->input('user_id'), 'cover' => $path, 'draft' => 0]);
            $response['status'] = 'ok';
            $response['article'] = $article->toArray();
        } catch (Exception $e) {
            $response['status'] = 'error';
            $response['message'] = $e->message();
        }

        return response()->json($response);
    }
}