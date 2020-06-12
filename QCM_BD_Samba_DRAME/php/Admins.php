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
                color: black;
                cursor: pointer;
        }
        .ame a:hover{
            color: orangered;
            border-bottom: 2px solid gold;
        }
        .alet{
            margin-top: -5%;
        }
        .gore {
            height: 50px;
            width: 600px;
            margin-top: -11%;
            float:left;
            margin-left: 6%;
            }
            .hos{
                margin-top: 20%;
                width: 100%;
                background-color: burlywood;
                height: 450px;
                margin-top: -13%;
                border-radius: 10px;
            }
    </style>
    <script>
    $('.Admin').click(function(e){
    if(e.target.id === 'ajouter'){
        $('#hos').load('php/inscriptionADMIN.php');
    }else if(e.target.id === 'modifier'){
        $('#hos').load('php/modifieAdmin.php');
    }else if(e.target.id === 'lister'){
        $('#hos').load('php/ListeAdmin.php');
    }
});
</script>
</head>
<body>
    <div class="gore">
            <div class="ame">
            <a href="#" id="ajouter" class="Admin">Ajouter</a>
            </div>
            <div class="ame">
                <a href="#" id="modifier" class="Admin">Modifier</a>
            </div>
            <div class="ame">
                <a href="#" id="lister" class="Admin">Liste</a>
            </div>
    </div>
    <div class="hos" id="hos">
   
    </div>
</body>
</html>