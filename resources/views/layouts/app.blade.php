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
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

    <body>
        <!-- Website header -->
        <header id="site-header" class="p-4">
            <nav class="d-flex justify-content-between">
                <div class="links">
                    <a class="mr-3" href="/">Home</a>
                    <a href="/posts">Posts</a>
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

        <script src="{{ asset("js/bootstrap.js") }}"></script>
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>