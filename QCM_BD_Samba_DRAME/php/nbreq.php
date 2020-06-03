<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Admin</title>
    <style>
        .Ba {
                width: 270px;
                border: 2px solid gray;
                border-radius: 5px ;
                background-color: gray;
                font-weight: bold;
                color: gray;
                float:left; margin-left: 20px;
        }
        .Ba a {
                font-size: 25px;
                text-align: center;
                text-decoration: none;
        }
        .alerte{
            margin-top: 2%;
        }
        .Ass {
            height: 50px;
            width: 600px;
            margin-top: ;
            float:left;
            margin-left: 6%;
            }
            .hoses{
                width: px;
            }
    </style>
</head>
<body>
<div class="alerte">
<div class="Ass">
          <div class="Ba">
           <a href="index.php?lien=accueil&nomv=4&sam=1">Nbre Questions Par Jeu</a>
          </div>
          <div class="Ba">
            <a href="index.php?lien=accueil&nomv=4&sam=2">Tableau De Bord</a>
          </div>
</div>
<div class="hoses">
<?php   
if (isset($_GET['sam'])) 
    {    
        if ($_GET['sam']=="1") 
        {
            include_once("modifier.php");
        }
        elseif($_GET['sam']=="2") 
        {
            include_once("tableau.php");
        }
    }
?>
</div>
</div>
</body>
</html>