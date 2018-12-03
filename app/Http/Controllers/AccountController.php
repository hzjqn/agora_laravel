<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

    public function show(){
        $user = Auth::user();
        return view('account', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('edit_account', compact('user'));
    }

    public function save(Request $request){
        $user = Auth::user();
        return view('account', compact('user'));
    }
}
