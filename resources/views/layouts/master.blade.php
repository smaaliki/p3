<!doctype html>
<html>
<head>
    <title>@yield('title', 'Some Title')</title>
    <meta charset='utf-8'>
    <link href='/css/main.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>
    <div class="pageheader">
        <div class='logo'>
            <a href="../index.php">
                <img src="../images/logo.jpg" alt="Logo">
            </a>
        </div>
        <div>
            <div class='hdrtitle'> Entity Name Here</div>
        </div>
    </div>
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }} - Entity Name Here
</footer>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

@stack('body')

</body>
</html>