<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet" />

{{--    <link rel="stylesheet" href="/css/app.css">--}}

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

    @yield('head')

</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/home">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{ Request::path() === 'home' ? 'current_page_item' : '' }}"><a href="/home" accesskey="1" title="">Homepage</a></li>
                <li class="{{ Request::path() === 'client' ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
                <li class="{{ Request::path() === 'career' ? 'current_page_item' : '' }}"><a href="#" accesskey="4" title="">Careers</a></li>
                <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
            </ul>
        </div>
    </div>

    @yield('header')

</div>

@yield('content')

<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
{{--<script src="/js/app.js"></script>--}}
</html>