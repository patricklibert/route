<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../index.php">
    <script src="../index.php"></script>
    <title>Profile</title>
</head>
<body>
<div class="outerdiv">
    <div class="maindiv">
        <div class="leftdiv">
            <p>I AM <?php echo $row[0]['first_name'] . " " . $row[0]['last_name'];

                ?></p>
            <p>JUNIOR WEB DEVELOPER</p>
            <?php

            echo "<img src='" . $row[0]['avatar'] . "'>";

            ?>
        </div>
        <div class="rightdiv" id="rightdiv1">


        </div>

    </div>

</div>
</body>
</html>

