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
                    {{ __('Written by') . ' ' . $article->user->name }} <a class="user-tag" href="">{{ '@'.$article->user->username  }}</a>
                </div>
                
                <h3>Subtitulo</h3>
                <summary>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis veritatis fugit facere, quia aspernatur optio nam fugiat excepturi quasi, vitae maxime alias, sequi quae itaque et nobis saepe nostrum ipsum.
                </summary>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam officiis quae mollitia in aspernatur ducimus eum, tempore molestiae atque quas, repellendus amet nostrum quod itaque dolorum fugit placeat iste. Hic!
                </p>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium impedit voluptas harum quam cupiditate aperiam quibusdam vero maxime expedita perferendis sint minima, illo, repellendus ipsa quos consequuntur nesciunt nulla enim?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, minus. Asperiores vel molestias provident culpa mollitia totam a, sed aut hic fugiat illum et impedit. Molestias maiores eum suscipit mollitia.
                </p>
                <cite> A quote </cite>
            </main>
            <aside class="article author profile" id="author">
                <h4>Sobre el autor</h4>
                <div class="profile-pp">
                    <img class="navbar-pp" src="{{ $article->user->profile_picture ? URL::asset($article->user->profile_picture) : URL::asset('img/pp.png') }}" alt="Tu foto de perfil">
                </div>
                <h5>Jose Hernandez</h5>
                <a href=""><span class="username-tag">{{ '@'.Auth::user()->username }}</span></a>
                <form action="">
                    @csrf
                    <button class="follow-btn" type="submit">
                        {{ __('Follow') }}
                    </button>
                </form>
            </aside>
            <section id="comments">
                <h4>Comentarios</h4>
                <div class="container">
                    A comment
                </div>
            </section>
    </div>
@endsection