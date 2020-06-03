<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Admin</title>
    <style>
        .B {
                width: 250px;
                font-size: 24px;
                border: 2px solid gray;
                border-radius: 5px ;
                background-color: gray;
                font-weight: bold;
                color: gray;
                float:left; margin-left: 30px;
        }
        .B a {
                margin-left:20%;
                font-size: 40px;
                text-decoration: none;
        }
        .alert{
            margin-top: 2%;
        }
        .As {
            height: 50px;
            width: 600px;
            margin-top: ;
            float:left;
            margin-left: 6%;
            }
            .hose{
                width: px;
            }
    </style>
</head>
<body>
<div class="alert">
<div class="As">
          <div class="B">
           <a href="index.php?lien=accueil&nomv=3&name=1">Liste</a>
          </div>
          <div class="B">
            <a href="index.php?lien=accueil&nomv=3&name=2">Bloquer</a>
          </div>
</div>
<div class="hose">
<?php   
if (isset($_GET['name'])) 
    {    
        if ($_GET['name']=="1") 
        {
            include_once("Liste.php");
        }
        elseif($_GET['name']=="2") 
        {
            include_once("Bloquer.php");
        }
    }
?>
</div>
</div>
</body>
</html>