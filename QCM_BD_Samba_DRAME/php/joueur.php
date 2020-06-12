<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Admin</title>
    <style>
        .B {
                width: 250px;
                font-size: 20px;
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
                color: black;
                cursor: pointer;
        }
        .B a:hover{
            color: orangered;
            border-bottom: 2px solid gold;
        }
        .alert{
            margin-top: -5%;
        }
        .As {
            height: 20px;
            width: 600px;
            float:left;
            margin-top: -10%;
            margin-left: 6%;
            }
            .hose{
                width: 100%;
                background-color: burlywood;
                height: 450px;
                border-radius: 10px;
            }
    </style>
    <script>
    $('.list').click(function(e){
    if(e.target.id === 'list'){
        $('#hose').load('php/Liste.php');
    }else if(e.target.id === 'bloque'){
        $('#hose').load('php/bloquer.php');
    }
});
</script>
</head>
<body>
    <div class="As">
            <div class="B">
            <a href="#" class="list" id="list">Liste</a>
            </div>
            <div class="B">
                <a href="#" class="list" id="bloque">Bloquer</a>
            </div>
    </div>
    <div class="hose" id="hose">

    </div>
</body>
</html>