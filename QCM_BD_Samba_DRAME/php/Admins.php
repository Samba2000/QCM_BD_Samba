<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Admin</title>
    <style>
        .ame {
                width: 150px;
                border: 2px solid gray;
                border-radius: 5px ;
                background-color: gray;
                font-weight: bold;
                color: gray;
                float:left; margin-left: 30px;
        }
        .ame a {
            text-decoration: none;
                font-size: 30px;
                margin-left: 10%;
        }
        .alet{
            margin-top: 2%;
        }
        .gore {
            height: 50px;
            width: 600px;
            margin-top: ;
            float:left;
            margin-left: 6%;
            }
            .hos{
                width: px;
            }
    </style>
</head>
<body>
<div class="alet">
<div class="gore">
          <div class="ame">
           <a href="index.php?lien=accueil&nomv=2&names=1">Ajouter</a>
          </div>
          <div class="ame">
            <a href="index.php?lien=accueil&nomv=2&names=2">Modifier</a>
          </div>
          <div class="ame">
            <a href="index.php?lien=accueil&nomv=2&names=3">Liste</a>
          </div>
</div>
<div class="hos">
<?php   
if (isset($_GET['names'])) 
    {    
        if ($_GET['names']=="1") 
        {
            include_once("inscriptionADMIN.php");
        }
        elseif($_GET['names']=="2") 
        {
            include_once("modifieAdmin.php");
        }
        elseif($_GET['names']=="3")
        {
            include_once("ListeAdmin.php");
        }
    }
?>
</div>
</div>
</body>
</html>