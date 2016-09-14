<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet" />
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">

    @yield('header_styles')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="@yield('bodyClass')">
    @include('layouts.nav')

    <div class="Content container">
        @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Terms &amp; Conditions</p>
                    </div>
                </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('footer_scripts')
</body>
</html>
