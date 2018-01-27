<!DOCTYPE HTML>
<!--
    Multiverse by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>{{ config('app.name') }} | Bavanco</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="{{ asset('js/ie/html5shiv.js') }}"></script><![endif]-->
        <link rel="stylesheet" href="{{ asset('css/front.css') }}" />
        <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('css/ie/ie9.css') }}" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('css/ie/ie8.css') }}" /><![endif]-->
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>

        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <h1>
                    <a href="{{ route('home') }}"><strong>{{ config('app.name') }}</strong></a>
                </h1>
                <nav>
                    <ul>
                        <li><a href="#footer" class="icon fa-info-circle">About</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Thumbnails -->
            <div id="main">
                @foreach ($albums as $album)
                <article class="thumb">
                    <section id="{{ $album->slug }}" class="gallery">
                        @foreach ($album->photographs as $photograph)
                        @if ($loop->first)
                        <a href="{{ $photograph->path }}" class="image" data-caption="{{ $photograph->caption }}" data-camera="{{ $photograph->camera->ref }}">
                            <img src="{{ $album->thumbnail }}" alt="{{ $album->name }}" />
                        </a>
                        @else
                        <a href="{{ $photograph->path }}" class="image" data-caption="{{ $photograph->caption }}" data-camera="{{ $photograph->camera->ref }}" style="display: none;"></a>
                        @endif
                        @endforeach
                        <h2 class="gallery-title">{{ $album->name }}</h2>
                    </section>
                </article>
                @endforeach
            </div>

            <!-- Footer -->
            <footer id="footer" class="panel">
                <div class="inner split">
                    <div>
                        <section>
                            <h2>Welcome to {{ config('app.name') }}</h2>
                            <p>
                                I met Jillian in 2008 when she first visited London. A few months later I returned the favour and visited Dallas.
                                After a couple of years I moved to Texas as we got married.
                                <br>
                                Since then we have traveled together, documenting our adventures with our photography.
                                This gallery contains some of my favourite photographs from across, what is now, {{ count($albums) }} destinations.
                            </p>
                        </section>
                        <section>
                            <h2>Bavanco</h2>
                            <p>Visit the <a href="http://www.bavanco.co.uk" target="_blank">Bavanco</a> home page.</p>
                        </section>
                        <p class="copyright">
                            &copy; 2002 - {{ date('Y') }} Bavanco. | Design based on Multiverse: <a href="http://html5up.net" target="_blank">HTML5 UP</a>.
                        </p>
                    </div>
                    <div>
                        <section id="camera-credits">
                            <h2>Camera Credits <a href="{{ route('cameras') }}" class="link">more...</a></h2>
                            <ul>
                                @foreach ($cameras as $camera)
                                <li>
                                    <strong>{{ $camera->ref }}:</strong> {{ $camera->fullname }} <em>({{ $camera->photographs_count }} photos)</em>
                                </li>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/vendor.js') }}"></script>
        <!--[if lte IE 8]><script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
        <script src="{{ asset('js/main-gallery.js') }}"></script>

    </body>
</html>
