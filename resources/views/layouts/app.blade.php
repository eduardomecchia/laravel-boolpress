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
    </head>

    <body>
        <!-- Website header -->
        <header>

        </header>

        <!-- Page content -->
        <main>
            @yield("content")
        </main>

        <!-- Website footer -->
        <footer>

        </footer>
    </body>
</html>