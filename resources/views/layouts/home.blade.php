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

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="@yield('bodyClass')">    
    <header>
        @include('layouts._home-nav')
    </header>
    <section class="background-video">
        <video id="home-video" class="video-js" autoplay muted loop preload="auto" data-setup="{}">
            <source src="/videos/background-video.mp4" type='video/mp4'>
            <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
        <img src="/images/background-video-mask.png" alt="" title="" />
    </section>
    <div class="Home__content">
        <div class="Content container">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('footer_scripts')
</body>
</html>