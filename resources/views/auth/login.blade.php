@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 login-form d-flex justify-content-center flex-column align-items-center">
            <article class="d-flex justify-content-center flex-column align-items-center text-center">
                <h1 class="agora-svg-logo with-text inverted"><i class="agora-logo">ágora</i></h1>
                <h2>
                    <strong>Ágora</strong> es una <strong>red social</strong> donde cualquiera puede encontrar un canal para <strong>expresar</strong> sus opiniones. 
                </h2>
            </article>
            <form class="solid-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-case">
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email">{{ 'hzdes.95@gmail.com' }}</label>
            
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-case">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password">{{ __('Password') }}</label>
                    
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="input-case">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="form-input mb-0 justify-content-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </form>
            <div class="footer">
                <a href=" {{ route('faq') }}">{{ __('Frequently Asked Questions') }}</a> | <a href="{{ route('privacy') }}"> {{ __('Privacy') }} </a>
            </div>
        </div>
        <div class="login-carousel-wrapper col-md-6 col-lg-8 d-none d-md-block">
            <div id="carouselExampleIndicators" class="carousel slide login-crousel" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner login-carousel-inner">
                        <div class="carousel-item active login-carousel-item">
                            a
                        </div>
                        <div class="carousel-item login-carousel-item">
                            b
                        </div>
                        <div class="carousel-item login-carousel-item">
                            c
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
