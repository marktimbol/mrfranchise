<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle') | {{ config('app.name', 'Laravel') }}</title>

    <link href="/css/app.css" rel="stylesheet">

    @yield('header_styles')
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="@yield('bodyClass')">
    <header>
        @include('layouts._nav')
        @yield('subpage__header')
    </header>
    
    <div class="Content container">
        @yield('content')
    </div>

    @yield('content_after_container')

    @include('layouts._footer')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('footer_scripts')
</body>
</html>
