{{-- nos tiene que llegar desde el controller via view() los comentarios, los autores y el articulo --}}
@extends('layouts.main')
@section('navbar', '')
@section('botbar', '')
@section('content')
    <div class="container article">
            <main class="article body" id="article">
                
                <div class="tag-wrapper">
                    <a href="" class="tag">#tag</a>
                </div>
                
                <h2>{{ $article->title }}</h2>

                <div class="author-reference">
                {{ __('Written by')  }} <img class="inline-icon-pp" src="{{ $article->user->profile_picture ? URL::asset($article->user->profile_picture) : URL::asset('img/pp.png') }}" alt="{{ __("Author's profile picture") }}"> {{$article->user->name }} <a class="user-tag" href="">{{ '@'.$article->user->username  }}</a>
                </div>
                
                {!! $article->content !!}
            </main>
            <aside class="article author profile" id="author">
                <h4>Sobre el autor</h4>
                <div class="profile-pp">
                    <img class="navbar-pp" src="{{ $article->user->profile_picture ? URL::asset($article->user->profile_picture) : URL::asset('img/pp.png') }}" alt="{{ __("Author's profile picture") }}">
                </div>
                <h5>{{ $article->user->name }}</h5>
                <a href=""class="user-tag">{{ '@'.$article->user->username }}</a>
                @component('components.followbtn', ['follower'=>Auth::user(), 'followed'=>$article->user])
                @endcomponent
            </aside>
            <section id="comments">
                <h4>Comentarios</h4>
                <div class="container">
                    A comment
                </div>
            </section>
    </div>
@endsection

@section('js')
<script src="{{ asset('js/article.js') }}"></script>
@endsection