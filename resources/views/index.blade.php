@extends('layouts.main')

@section('navbar', '')
@section('botbar', '')

@section('content')
    @forelse ($last_actions as $action)
        @component('components.card', ['action' => $action])
        @endcomponent
    @empty

    @endforelse
@endsection
