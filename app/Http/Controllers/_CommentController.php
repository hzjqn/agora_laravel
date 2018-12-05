<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class _CommentController extends Controller
{
    public function create(Request $request)
    {
        $comment = [
            'content' => $request->input('content'),
            'user_id' => $request->input('user_id'),
            'article_id' => $request->input('article_id')
        ];

        $validaciones = [
            'content' =>'required',
            'user_id '=>'required',
            'article_id'=>'required'
        ];

        // $this->validate($validaciones);

        $commentToRet = Comment::create($comment);

        return response()->json($commentToRet);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    { 
        $comentario=Comment::find($comment);
        $articulo=Article::find($comment->article_id);
        return view('article/'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comentario = Comment::find($comment);
        $comentario->delete();
        return view('article/{{$comentario->article_id}}');
    }
}
