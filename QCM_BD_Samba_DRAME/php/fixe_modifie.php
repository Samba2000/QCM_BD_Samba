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
                color: black;
                cursor: pointer;
        }
        .Am a:hover{
            color: orangered;
            border-bottom: 2px solid gold;
        }
        .alt{
            margin-top: -5%;
        }
        .gor {
            height: 50px;
            width: 600px;
            margin-top: -11%;
            float:left;
            margin-left: 6%;
            }
            .ho{
                width: 100%;
                background-color: burlywood;
                height: 450px;
                border-radius: 10px;
            }
    </style>
    <script>
    $('.ajouter').click(function(e){
    if(e.target.id === 'ajout'){
        $('#ho').load('php/question.php');
    }else if(e.target.id === 'modifie'){
        $('#ho').load('php/modifiequestion.php');
    }else if(e.target.id === 'sup'){
        $('#ho').load('php/supquestion.php');
    }else if(e.target.id === 'liste'){
        $('#ho').load('php/creer_questions.php');
    }
});
</script>
</head>
<body>
    <div class="gor">
            <div class="Am">
            <a href="#" class="ajouter" id="ajout">Ajouter</a>
            </div>
            <div class="Am">
                <a href="#" class="ajouter" id="modifie">Modifier</a>
            </div>
            <div class="Am">
                <a href="#" class="ajouter" id="sup">Supprimer</a>
            </div>
            <div class="Am">
                <a href="#" class="ajouter" id="liste">Liste</a>
            </div>
    </div>
    <div class="ho" id="ho">

    </div>
</body>
</html>