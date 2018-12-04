@extends('layouts.main')

@section('navbar', '')

@section('content')
<div class="container">
    <div class="row feed">
        @component('components.mainfeed', ['articles' => $allArticles, 'title' => __('From your subcriptions')])
        @endcomponent
        
        @component('components.popfeed', ['articles' => $mostPopularArticles,  'title' => __('Most popular articles')])
        @endcomponent
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('/js/mainfeed.js') }}"></script>
@endsection