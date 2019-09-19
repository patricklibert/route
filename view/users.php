<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/9d06a64cb4.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

if((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == true)) {

    echo "Logged in as " . $_SESSION['username'] . "! <a href='logout'> Log out</a>";
} else {
    echo "<a href='login'> Log in</a>";
}

echo "<br>PHP parsing is working<br>";

foreach ($inhoud as $value) {

    echo "<a href='users/" . $value['first_name'] . "'>" . $value['first_name'] . "</a><a href='" . $value['github'] . "'> <i class=\"fab fa-github\"></i></a><br>";
}


?>