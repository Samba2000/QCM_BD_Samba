<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Admin</title>
    <style>
        .Ba {
                width: 280px;
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
                color: black;
                cursor: pointer;
        }
        .Ba a:hover{
            color: orangered;
            border-bottom: 2px solid gold;
        }
        .alerte{
            margin-top: -5%;
        }
        .Ass {
            height: 50px;
            width: 600px;
            float:left;
            margin-top: -11%;
            margin-left: 6%;
            }
            .hoses{
                width: 100%;
                background-color: burlywood;
                height: 450px;
                border-radius: 10px;
            }
    </style>
    <script>
    $('.jeu').click(function(e){
    if(e.target.id === 'jeu'){
        $('#hoses').load('php/modifier.php');
    }else if(e.target.id === 'tableau'){
        $('#hoses').load('php/tableau.php');
    }
    });
</script>
</head>
<body>

    <div class="Ass">
            <div class="Ba">
            <a href="#" class="jeu" id="jeu">Nbre Questions Par Jeu</a>
            </div>
            <div class="Ba">
                <a href="#" class="jeu" id="tableau">Tableau De Bord</a>
            </div>
    </div>
    <div class="hoses" id="hoses">

    </div>
</body>
</html>