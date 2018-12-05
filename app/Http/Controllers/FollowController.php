<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function follow(Request $request)
    {    //
        $follower_id = Auth::user()->id;
        $followed_id = User::find($request->input('followed_id'))->id;

        Follow::create(['followed_id' => $followed_id, 'follower_id' => $follower_id]);
        $response = [
            'status' => 'ok',
            'data' => [
                'follower' => $follower_id,
                'followed' => $followed_id
            ],
            'followbtn' => [
                'html' => __('Unfollow')
            ]
        ];
        return response()->json($response, 200);
    }

    public function unfollow(Request $request)
    {    //
        $follow = Follow::where('followed_id', $request->input('followed_id'))->where('follower_id', Auth::user()->id);
        $follow->delete();
        $response = [
            'status' => 'ok',
            'followbtn' => [
                'html' => __('Follow')
            ]
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Follow $follow)
    {
        //
    }
}
