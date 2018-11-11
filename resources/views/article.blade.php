{{-- nos tiene que llegar desde el controller via view() los comentarios, los autores y el articulo --}}

@extends('layouts.main')

@section('content')
    <aside class="article author profile">
        autor
    </aside>
    <main class="article body">
        <h2>Titulo del articulo</h2>
        <h3>Subtitulo</h3>
        contenido
        <cite> A quote </cite>
    </main>
    <section id="comments">
        <h4>Comentarios</h4>

    </section>
@endsection