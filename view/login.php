<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (isset($_POST['submit'])) {
    echo "Submit OK";
} ?>
    <form action="" method="post">
        <label>Login</label><br>
        <input type="text" name="login"/><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
