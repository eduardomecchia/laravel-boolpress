<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Title -->
        <title>@yield("title", "Boolpress")</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    </head>

    <body>
        <div id="app">
            <!-- Website header -->
            <header id="site-header" class="p-4">
                <nav class="d-flex justify-content-between">
                    <div class="links">
                        <a href="/" class="mr-3">Home</a>
                        <a href="/posts" class="mr-3">Posts</a>
                        <a href="/contact" class="mr-3">Contact</a>
                        <a href="/blog">Blog</a>
                    </div>
    
                    <div class="auth">
                        <a class="mr-3" href="{{ route("login") }}">Login</a>
                        <a href="{{ route("register") }}">Register</a>
                    </div>
                </nav>
            </header>
    
            <!-- Page content -->
            <main>
                @yield("content")
            </main>
    
            <!-- Website footer -->
            <footer id="site-footer">
    
            </footer>
        </div>

        <script src="{{ asset("js/bootstrap.js") }}"></script>
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>