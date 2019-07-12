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
        <meta name="theme-color" content="#337024">
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
                        <li><a href="#footer" class="icon fa-info-circle">Cameras</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Thumbnails -->
            <div id="main">
                @foreach ($camera_types as $camera_type)
                @foreach ($camera_type->cameras as $camera)
                <article class="thumb">
                    <section class="gallery">
                        <div class="image">
                            <img src="{{ $camera->image }}" alt="{{ $camera->full_name }}" />
                        </div>
                        <h2 class="gallery-title">{{ $camera->full_name }}</h2>
                    </section>
                </article>
                @endforeach
                @endforeach
            </div>

            <!-- Footer -->
            <footer id="footer" class="panel">
                <div class="inner split">
                    <section>
                        <h2>Camera Credits</h2>
                        <ul class="split-list">
                            @foreach ($camera_types as $camera_type)
                            <li>
                                <strong>{{ str_plural($camera_type->name) }}</strong>
                                <ul>
                                    @foreach ($camera_type->cameras as $camera)
                                    <li><strong>{{ $camera->full_name }}:</strong> {{ $camera->description }}</li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/vendor.js') }}"></script>
        <!--[if lte IE 8]><script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
        <script src="{{ asset('js/camera-gallery.js') }}"></script>

    </body>
</html>
