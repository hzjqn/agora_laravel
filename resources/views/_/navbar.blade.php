<nav class="navbar fixed-top navbar-expand-lg navbar-agora">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><h1 class="logo"><i class="agora-logo">ágora</i></h1></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link log" href="./login.php">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item spacer">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link reg" href="./register.php">Registrarse</a>
                    </li>
                </ul>
                @auth
                    <div class="ml-auto"><img src="{{ Auth::user()->profile_picture ?? "pp.png" }}" alt="asdf">
                        <a class="toolbar-btn" href="./new_article.php"><i class="fas fa-pencil-alt"></i></i></a>
                        <form method="post"><button type="submit" name="logout" value="true" class="toolbar-btn"><i class="fas fa-sign-out-alt"></i></button></form>
                    </div>
                @endauth
            </div>
        </div>
    </nav>