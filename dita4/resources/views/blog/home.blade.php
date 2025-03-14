<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>HOME</H1>
    <?php
        echo "welcome, $username";
    ?>
    <br>
    @if ($username == "Admin")

        {("welcome, $username")}
    @else

        {("welcome, Users")}
    @endif
</body>
</html>