<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravelia
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--Header section -->
                </div>
            </div>
        </nav>
        
        <!--Content section -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@yield('script')
</html>
