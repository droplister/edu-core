<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@if(! empty($_GET))
    <meta name="robots" content="noindex,follow">
@endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38718705-57"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '{{ config('edu-core.google_analytics') }}');
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand mr-auto mr-lg-3" href="{{ route('home.index') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item d-none d-md-inline-block">
                        <a class="nav-link" href="{{ route('home.index') }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="nav-scroller box-shadow">
            <nav class="nav nav-underline">
                @include('edu-core::partials.subnav-left')
                @include('edu-core::partials.subnav-right')
            </nav>
        </div>

        <main role="main" class="container">
            @yield('content')
        </main>

        <footer role="footer" class="container">
            <div class="row text-center my-3">
                <div class="col">
                    <p class="text-muted pt-3 pb-0 mb-0 small lh-135">
                        <a href="{{ route('pages.disclaimer') }}" class="mr-2">Disclaimer</a>
                        <a href="{{ route('pages.privacy') }}" class="mr-2">Privacy</a>
                        <a href="{{ route('pages.terms') }}">Terms</a>
                    </p>
                    <p class="text-muted pt-1 pb-3 mb-0 small lh-135">
                        <a href="https://familymediallc.com/" class="text-muted">Family Media LLC</a>
                        &copy; {{ date('Y') }}
                    </p>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>
