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
        <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    </head>

    <body class="bg-lavender">
        <div id="app">
            <!-- Website header -->
            <header id="site-header" class="p-4">
                <nav class="d-flex justify-content-between">
                    <div class="links">
                        <a href="/admin" class="mr-3">Dashboard</a>
                        <a href="/admin/posts" class="mr-3">Posts</a>
                        <a href="/contact" class="mr-3">Contact</a>
                        <a href="/blog">Blog</a>
                    </div>
    
                    <div class="auth d-flex align-items-center">
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
        </div>

        <script src="{{ asset("js/bootstrap.js") }}"></script>
        <script src="{{ asset("js/admin.js") }}"></script>
    </body>
</html>