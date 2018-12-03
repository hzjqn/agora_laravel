@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="account-main">
                <h1>{{ __('Account Settings') }}</h1> <a href=" {{ route('account.edit') }} " class="btn btn-sidequest"><i class="fas fa-pencil-alt"></i> Editar</a>
                <div class="data-value">
                    <span class="label">{{ __('Name') }}</span>
                    <span class="value">{{ $user->name }}</span>
                </div>
                <div class="data-value">
                    <span class="label">{{ __('Username') }}</span>
                    <span class="value">{{ $user->username }}</span>
                </div>
                <div class="data-value">
                    <span class="label">{{ __('Email') }}</span>
                    <span class="value"> {{ $user->email }} </span>
                </div>
            </div>
        </div>
    </div>
@endsection
