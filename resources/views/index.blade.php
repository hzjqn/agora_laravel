@extends('layouts.main')

@section('navbar', '')

@section('content')
<div class="container">
    <div class="row feed">
        @if($subArticles)
            @component('components.mainfeed', ['articles' => $subArticles, 'title' => __('From your subcriptions')])
            @endcomponent
        @else
            @component('components.mainfeed', ['articles' => $allArticles, 'title' => __('Recommended for you')])
            @endcomponent
        @endif
        
        @component('components.popfeed', ['articles' => $mostPopularArticles,  'title' => __('Most popular articles')])
        @endcomponent
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('/js/mainfeed.js') }}"></script>
@endsection