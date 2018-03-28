<!doctype html>
<html>
<head>
    <title>@yield('title', 'Some Title')</title>
    <meta charset='utf-8'>
    <link href='/css/p3.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>
    <a href='/'><img src='/images/logo.jpg' id='logo' alt='Entity  Logo'></a>
    <div id='hdrtitle'> Entity Name Here</div>
    @include('modules.nav')
</header>

<section id='main'>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }} - Entity Name Here
</footer>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

@stack('body')

</body>
</html>