<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Boolpress | New Email</title>
    </head>
    
    <body>
        <h1>Hai ricevuto un nuovo messaggio da {{ $data["full_name"] }}</h1>
        <p>Messaggio da: {{ $data["email"] }}</p>

        <br>

        <p>Messaggio: {{ $data["message"] }}</p>
    </body>
</html>