@extends('layouts.main')

@section('navbar', '')

@section('content')

<div class="container">
    <div class="row">
        <aside class="article author profile" id="author">
            <h4>Sobre el autor</h4>
            <div class="profile-pp">
                <img class="navbar-pp" src="{{ $user->profile_picture ? URL::asset($user->profile_picture) : URL::asset('img/pp.png') }}" alt="{{ __("Author's profile picture") }}">
            </div>
            <h5>{{$user->name }}</h5>
            <a href="{{ route('user.index')}}/{{$user->id}}" class="user-tag">{{ '@'.$user->username }}</a>
            @component('components.followbtn', ['follower'=>Auth::user(), 'followed'=>$user])
            @endcomponent
        </aside>
        <div class="main">
            <div id="articles">
                <h4> {{ __('Articles') }} </h4>
                @foreach($user->articles as $article)
                    @component('components.card', ['action' => $article, 'type' => 'pop'])
                    @endcomponent
                @endforeach        
            </div>
        </div>
    </div>
</div>

@endsection