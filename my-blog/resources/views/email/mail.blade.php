<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>
        body{
            background: grey;
            font-family: arial;
        }
    </style>
</head>
<body>
    Salut {{ $name }},

    <p>Bienvenu</p>
    <p> {!! $body !!}</p>
</body>
</html>