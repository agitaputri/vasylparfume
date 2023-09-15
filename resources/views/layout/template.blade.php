<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/master.css" >
    </head>
    <body>
        <header>
            <nav>
                <a href="/">Home</a>
                <a href="/blog">Blog</a>
            </nav>
        </header>
        <br>

        @yield('content')
        <footer>
            <p>
                &copy; laravel
            </p>
        </footer>

        <script src = "/js/main.js"></script>
    </body>
</html>
