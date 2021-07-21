<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Title -->
        <title>@yield("title", "Boolpress | Admin Area")</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset("css/admin.css") }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

    <body>
        <!-- Website header -->
        <header id="site-header" class="p-4">
            <nav class="d-flex justify-content-between">
                <div class="links">
                    <a class="mr-3" href="/admin">Dashboard</a>
                    <a href="/admin/posts">Posts</a>
                </div>

                <div class="auth">
                    <a href="#" class="username mr-3">{{ Auth::user()->name }}</a>

                    <form action="{{ route("logout") }}" method="POST">
                        @csrf 

                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
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
        <script src="{{ asset("js/admin.js") }}"></script>
    </body>
</html>