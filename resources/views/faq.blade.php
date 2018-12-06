@extends('layouts.main')
@section('navbar', '')

@section('content')
<header id="faq-header">
        <div class="container">
            <section id="start">    
                <article>
                    <h2>
                        <strong>Preguntas Frecuentes</strong>
                    </h2>
                </article>
            </section>
        </div>
    </header>
    <!-- TERMINA HEADER -->
    <!-- MAIN -->
    <main>
        <!-- PREGUNTAS -->
        <section id="preguntas" class="wb">
                <div class="container">
                    <div>
                        <article>
                            <h2>¿Cómo creo una cuenta en Ágora?</h2>
                            <p>
                                Puedes hacer click en el botón celeste al costado superior derecho de la pantalla (o <a href="register.php">aqui</a>). Esto te enviara a un formulario donde deberas proveer tus datos personales para armar un perfil en Agora. Y listo! Asi de simple.
                            </p>
                        </article>
                    </div>
                    <div>    
                        <article>
                            <h2>¿Puedo publicar en Ágora?</h2>
                            <p>
                                Toda persona o grupo de personas mayores de 16 años tiene permitido publicar contenido en Ágora. Pero para hacer esto es necesario <a href="register.php">Registrarse</a>.
                            </p>
                        </article>
                    </div>
                    <div>
                        <article>
                            <h2>¿Qué tipo de contenido tengo permitido publicar en Ágora?</h2>
                            <p>
                                Todo tipo de contenido es bienvenido. Pero asegurate de clasificar tanto la categoria como la audiencia objetivo. Esto nos ayudara a hacer que tus ideas lleguen a los que puedan estar interesados.
                            </p>
                        </article>
                    </div>
                    <div>
                        <article>
                            <h2>¿Cómo puedo hacer dinero con Ágora?</h2>
                            <p>
                                Muy bien, esto es importante. Ágora proporciona dos metodos de para remunerar a sus creadores de contenido. <br>
                            </p>
                            <p>
                                Primero cada creador podra tener una porcion de las ganancias de las publicidades que aparezcan en sus articulos, si las visitas a estos son mayores a 100 visitores por dia (Tambien nos interesan otras metricas. Para mas información: <a href="info-monetizacion">seguir leyendo</a>). <br>
                            </p>
                            <p>
                                Segundo si tienes mas de 200 seguidores seras elegible para ser un creador asociado de Agora. Esto quiere decir que tus seguidores seran capaces de patrocinarte haciendo una donación mensual de la cual tu recibiras una parte mayoritaria y nosotros un pequeño porcentaje.
                            </p>
                        </article>
                    </div>
                    <div>
                        <article>
                            <h2>¿Puedo desactivar las publicidades?</h2>
                            <p>
                                Si, puedes crear una cuenta premium y deshacerte de todas las publicidades. Las cuentas premium tambien tienen otros beneficios como una subscripcion gratuita por mes ( <a href="upgrade.php">Leer más</a>).
                            </p>
                        </article>
                    </div>
                    <div>
                        <article>
                            <center>     
                                <p>
                                    ¿Aún tenes dudas?  <a href="mailto:contacto@agora.com.ar">Contactate</a> con nosotros y pregunta lo que necesites.
                                </p>
                            </center>
                        </article>
                    </div>
                </div>
        </section>

@endsection