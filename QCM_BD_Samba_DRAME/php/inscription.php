<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contente="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0px;
            padding: 0px;
        }
        .head {
            background-image: url(../image/mountain.jpg);
            height: 100px;
        }
        .logo {
            background-image: url(../image/logo.png);
            background-size: 40% ;
            height: 90px;
            width: 10%;
            margin-left: 30px;
            background-repeat: no-repeat;
        }
        .contente {
            background-image: url(../image/turkey.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 600px;
            margin-top: -5%;
        }
        .header-text {
            color: white;
            position: absolute;
            top: -5px;
            left: 30%;
            font-size: 55px;
            font-weight: bold;
        }
        .container {
            position: relative;
            top: 5%;
            margin-left: 5%;
        }
</style>
</head>
<body>
<div class="head">
<div class="logo"></div>
<div class="header-text">Le Plaisir De Jouer</div>
</div>
<div class="contente">
<?php require_once('ins.php')?>
</div>
</body>
</html>