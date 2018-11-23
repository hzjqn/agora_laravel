@extends('layouts.main')

@section('navbar', '')
@section('botbar', '')

@section('content')
    @component('components.mainfeed', ['allArticles' => $allArticles])
    @endcomponent
@endsection

@section('js')
    <script src="{{ asset('/js/mainfeed.js') }}"></script>
@endsection