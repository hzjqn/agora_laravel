@extends('layouts.main')

@section('navbar', '')

@section('head-js')
@endsection

@section('content')
<div class="container">
    <form class="editor solid-form" id="editorMain" autocomplete="off">
        @csrf
        <div class="input-case title">
            <input type="text" autocomplete="false" name="user_id"  value="{{ Auth::user()->id }}" hidden>
            <input data-max-chars="190" type="text" autocomplete="false" name="title" class="editor title-input solid-title-input" value="{{ old('title') ?? __('') }}">
            <label for="title">{{ __('Title') }}</label>
        <span class="length-indicator"><i class="counter">0/190</i>&nbsp;— {{ __('Title character limit') }}</span>
        </div>
        <div class="input-case">    
            <label for="cover">Subir una foto de portada</label><br>
            <input type="file" name="cover" id="cover">
        </div>
        <div id="editorToolbar" class="editor toolbar">

        </div>
        <div id="article" autofocus="true" class="editor-canvas editable" placeholder="{{ __("Write here.") }}">
        </div>
        <div class="editor-form">
            <button id="publishBtn" class="btn objective">
                {{ __('Publish') }}
            </button>
            <button id="saveBtn" class="btn sidequest">
                {{ __('Save as draft') }}
            </button>
        </div>
    </form>
</div>
@endsection

@section('js')
    <script src=" {{ asset('js/solid.js') }} "></script>
    <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
    <script src=" {{ asset('js/editor.js') }} "></script>
@endsection

@section('head-css')
    <link rel="stylesheet" href=" {{ asset('css/beagle.min.css') }}">
@endsection
