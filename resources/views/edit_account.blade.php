@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">

        <div class="account-main">
                <h1>{{ __('Editing Account Settings') }}</h1>
                <form action="{{ route('account.save') }}" method="post">
                    @csrf
                    <div class="data-value">
                        <span class="label">{{ __('Name') }}</span>
                        <input type="text" name="name" class="value" value="{{ old('name') ? old('name') : $user->name }}" required>
                    </div>
                    <div class="data-value">
                        <span class="label">{{ __('Username') }}</span>
                        <input type="text" name="username" class="value" value="{{ old('username') ? old('username') : $user->username }}" required>
                    </div>
                    <div class="data-value">
                        <span class="label">{{ __('Email') }}</span>
                        <input type="text" name="email" class="value" value="{{ old('email') ? old('email') : $user->email }}" required>
                    </div>

                    <button class="btn btn-objective">
                        {{__('Confirmar')}}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
