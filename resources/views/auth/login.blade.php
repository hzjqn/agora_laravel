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
            <form class="solid-form {{ $errors->has('email') || $errors->has('password') ? 'error' : '' }}" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-case">
                    <input id="email" type="text" class="{{ $errors->has('email') ? ' is-invalid' : '' || $errors->has('username') ? ' is-invalid' : ''  }} solid-input" name="email" value="{{ old('email') }}" required>
                    <label for="email">{{ 'Username or Email' }}</label>
            
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-case">
                    <input id="password" autocomplete="false" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }} solid-input" name="password" required>
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="input-case">
                    <div class="form-check">
                        <input class="form-check-input solid-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                        <label class="form-check-label" for="remember">
                            {{ __('Remember me') }}
                        </label>
                    </div>
                </div>

                <div class="form-input justify-content-center">
                    <input type="submit" class="btn btn-primary solid-form-btn forward" value="{{ __('Sign in') }}">
                    <a class="btn solid-form-btn sidequest" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                    <a class="btn btn-link small-letter" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                </div>
            </form>
            <div class="footer">
                <a href=" {{ route('faq') }}">{{ __('FAQ') }}</a> | <a href="{{ route('privacy') }}"> {{ __('Privacy') }} </a>
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
                            <article>
                                <h2>Explorá.</h2>
                                <p>
                                    Navegá <strong>noticias</strong>, <strong>notas de opinión</strong>, <strong>blogs</strong> y mucho más. Indicá qué artículos te parecen <strong>útiles</strong> y cuanto <strong>respetas</strong> a una fuente.
                                </p>
                            </article>
                        </div>
                        <div class="carousel-item login-carousel-item">
                            <article>
                                <h2>Expresa.</h2>
                                <p>
                                <strong>Escribí, edita y publica</strong> tus propias notas. <strong>Compartí</strong> tus inquietudes, problemas, desafíos u opiniones con el mundo. Y encontrá <strong>seguidores</strong> y/o <strong>patrocinadores</strong>.
                                </p>
                            </article>
                        </div>
                        <div class="carousel-item login-carousel-item">
                            <article>
                                <h2>Se parte.</h2>
                                <p>
                                Armá <strong>colecciones</strong> y <strong>archiva</strong> tus notas preferidas, seguí a tus autores <strong>favoritos</strong> y recibí notificaciones cuando estos publican contenido!
                                </p>
                            </article>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
