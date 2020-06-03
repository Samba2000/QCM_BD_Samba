<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des questions</title>
    <style>
        .Am {
                width: 130px;
                border: 2px solid gray;
                border-radius: 5px ;
                background-color: gray;
                font-weight: bold;
                color: gray;
                float:left; margin-left: 20px;
        }
        .Am a {
            text-decoration: none;
                margin-left: 5%;
                font-size: 25px;
        }
        .alt{
            margin-top: 0%;
        }
        .gor {
            height: 50px;
            width: 600px;
            margin-top: ;
            float:left;
            margin-left: 6%;
            }
            .ho{
                width: px;
            }
    </style>
</head>
<body>
<div class="alt">
<div class="gor">
          <div class="Am">
           <a href="index.php?lien=accueil&nomv=1&nom=1">Ajouter</a>
          </div>
          <div class="Am">
            <a href="index.php?lien=accueil&nomv=1&nom=2">Modifier</a>
          </div>
          <div class="Am">
            <a href="index.php?lien=accueil&nomv=1&nom=3">Supprimer</a>
          </div>
          <div class="Am">
            <a href="index.php?lien=accueil&nomv=1&nom=4">Liste</a>
          </div>
</div>
<div class="ho">
<?php   
if (isset($_GET['nom'])) 
    {    
        if ($_GET['nom']=="1") 
        {
            include_once("question.php");
        }
        elseif($_GET['nom']=="2") 
        {
            include_once("modifiequestion.php");
        }
        elseif($_GET['nom']=="3") 
        {
            include_once("supquestion.php");
        }
        elseif($_GET['nom']=="4") 
        {
            include_once("creer_questions.php");
        }
    }
?>
</div>
</div>
</body>
</html>