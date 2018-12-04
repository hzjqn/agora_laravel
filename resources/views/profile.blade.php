@extends('layouts.main')

@section('navbar', '')

@section('content')

<div>
    <div id="profile-pic">
    <img class="inline-icon-pp" src="{{ $user->profile_picture ? URL::asset($user->profile_picture) : URL::asset('img/pp.png') }}" alt="{{ __("Author's profile picture") }}"> 
    </div>
    <div>
        <h1>{{$user->name}}</h1>
    </div>
    <div>
        <h2>{{$user->username}}</h2>
    </div>
    <div id="articles">
            @foreach($user->articles as $article)
                @component('components.card', ['action' => $article, 'type' => 'article'])
                @endcomponent
            @endforeach        
    </div>

</div>

@endsection