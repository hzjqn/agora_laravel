<nav class="navbar fixed-top navbar-expand-lg navbar-agora">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><h1 class="agora-svg-logo with-text"><i class="agora-logo">ágora</i></h1></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item">
                        <img class="navbar-pp" src="{{ Auth::user()->profile_picture ? URL::asset(Auth::user()->profile_picture) : URL::asset('img/pp.png') }}" alt="Tu foto de perfil">
                        <a href="profile/{{ Auth::user()->username }}/">{{ Auth::user()->username }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="toolbar-btn" href="./new_article.php"><i class="fas fa-pencil-alt"></i></i></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="toolbar-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                @endguest
                </ul>
            
            </div>
        </div>
    </nav>