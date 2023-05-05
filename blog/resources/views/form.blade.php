<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        <label> Nom 
            <input type="text" name="nom">
        </label>
        <label> Prenon 
            <input type="text" name="prenom">
        </label>
        <input type="submit" value="save">
    </form>
</body>
</html>