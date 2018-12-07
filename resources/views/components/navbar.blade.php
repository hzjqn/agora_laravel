<nav class="navbar-expand-lg navbar-agora">
    <nav class="topic-navbar">
        <div class="container m">
            <ul class="nav">
                @forelse (App\Category::all() as $category)
                    <li>
                        <a href="{{ route('category') }}/{{$category->id}}"> {{ $category->name }} </a>
                    </li>
                @empty
                @endforelse
            </ul>
        </div>
    </nav>
    <div class="container m">
        <div class="navbar-header-container">
        <div class="navbar-brand flex-grow-1"><a href=" {{ route('home') }} "><h1 class="agora-svg-logo with-text"><i class="agora-logo">ágora</i></h1></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        </div>
        <div class="navbar-content-container">
            <div class="static-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown m-x-md-1">
                        <a id="navbarDropdown" class="toolbar-btn textless" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img class="navbar-pp" src="{{ Auth::user()->profile_picture ? URL::asset(Auth::user()->profile_picture) : URL::asset('img/pp.png') }}" alt="Tu foto de perfil">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right positition-absolute" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('account') }}">
                                {{ __('Account') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                    <a class="nav-link btn navbar-sidequest" href="{{ route('login') }}">{{ __('Sign in') }}</a>
                    </li>
                    <li class="spacer d-none d-md-flex nav-item"><span class="nav-link d-flex justify-content-center align-items-center">{{ __('or') }}</span></li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link btn navbar-objective" href="{{ route('register') }}"> {{__('Sign up')}} </a>
                        @endif
                    </li>
                    @else
                    <li class="nav-item m-x-md-1">
                        <a class="toolbar-btn icon" href=" {{ route('article.new') }}"><i class="fas fa-pencil-alt"></i>{{ __('New Article') }}</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="navbarArticleProgressIndicator"></div>
