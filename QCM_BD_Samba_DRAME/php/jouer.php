<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Admin</title>
  <style>
    * {
        box-sizing: border-box;
    }
    .Ams {
       width: 190px;
       border-radius: 10px;
        font-weight: bold;
        height: 30px;
        float: left;
        margin-top: 10px;
        margin-left: 5px;
        background-color: #01FEEF;
      }
    .subs-menu {
      height: 350px;
      width: 400px;
      background-color: #D2D2D2;
      color: black;
      position: absolute;
      border-radius: 10px;
      }
    body{
      margin: 0px;
      padding: 0px;
    }
    .home{
      overflow: hidden; 
      border-radius: 100px; 
      -webkit-border-radius: 150px; 
      -moz-border-radius: 70px; 
      height: 100px; 
      width: 100px;
      float: left;
      background-color: red;
      border: 5px solid blue;
    }
    .homes{
      background-color: #01FEEF;
      width: 400px;
      height: 120px;
      border-radius: 10px;
    }
    .homes {
      font-weight: bold;
    }
    .affiche{
      width: 700px; background-color: #B8B8B8; margin-right: 1%; border-radius: 5px; height: 450px; float: right; margin-top: -10%;
    }
    .row{
      background-color: #FFFFFF; width: 85%; height: 480px; margin-top: 1%; border-radius: 10px; margin-left: 8%;
    }
    .accueil{
      margin-left: 1%;
      margin-top: -3%;
    }
    .content h1{
      margin-top: 1%;
      float: left;
      font-size: 28px;
    }
    .content h2{
      margin-top: 1%;
      float: right;
      background-color: #0FD2ED;
      border-radius: 5px;
      margin-right: 1%;
    }
    .haed{
      background-color: #01FEEF;
      margin-top: 1%;
      width: 85%;
      margin-left: 8%;
      border-radius: 10px;
      height: 55px;
    }
    .Ams a{
      text-align: center; text-decoration: none;
    }
    @media screen and (max-width: 1160px){
      .body{
        display: block;
      }
      .haed{
        height: 45px;
      }
      .content h1{
        font-size: 22px;
      }
    }
    @media screen and (max-width: 950px){
      .body{
        display: block;
      }
      .haed{
        height: 35px;
      }
      .content h1{
        font-size: 17px;
      }
    }
    @media screen and (max-width: 802px){
      .body{
        display: block;
      }
      .haed{
        height: 25px;
      }
      .content h1{
        font-size: 13px;
      }
      .content h2{
        font-size: 15px;
      }
    }
    @media screen and (max-width: 595px){
      .body{
        display: block;
      }
      .haed{
        height: 20px;
      }
      .content h1{
        font-size: 12px;
      }
      .content h2{
        font-size: 10px;
      }
    }
    @media screen and (max-width: 1330px){
      .body{
        display: block;
      }
      .homes{
      width: 350px;
      height: 100px;
      }
      .sub-menu {
      height: 350px;
      width: 350px;
      }
      .affiche{
      margin-top: -10%;
      width: 600px;
      }
    }
    @media screen and (max-width: 1150px){
      .homes{
      width: 350px;
      height: 100px;
      }
      .sub-menu {
      height: 350px;
      width: 350px;
      }
      .affiche{
      margin-top: -11%;
      width: 550px;
      }
    }
    @media screen and (max-width: 1088px){
      .homes{
      width: 320px;
      height: 100px;
      }
      .sub-menu {
      height: 300px;
      width: 320px;
      }
      .spans{
      margin-top: 10%;
      float: right;
      margin-right: 40%;
      }
      .affiche{
      margin-top: -12%;
      width: 500px;
      }
    }
    @media screen and (max-width: 995px){
      .homes{
      width: 100%;
      height: 100px;
      }
      .sub-menu {
      height: 350px;
      width: 84%;
      }
      .spans{
      margin-top: 5%;
      float: right;
      margin-right: 80%;
      }
      .affiche{
      margin-top: 42%;
      width: 100%;
      float: left;
      }
      .content{
        height: 1000px;
      }
    }
    @media screen and (max-width: 945px){
      .affiche{
      margin-top: 55%;
      }
      
    }
    @media screen and (max-width: 715px){
      .affiche{
      margin-top: 70%;
      }
      
    }
    .samb h2{
        margin-top: 0%;
    }
    .samb input{
        float: right;
        margin-top: -0%;
        width: 180px;
        height: 50px;
        border-radius: 10px;
    }
    .M{
        margin-top: 12%;
        background-color: gray;
        width: 100%;
        height: 300px;
        border-radius: 10px;
    }
  </style>
</head>
<body>
    <div class="content">
        <div class="haed">
            <h1>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</h1>
            <h2>Deconnexion</h2>
        </div>
            <div class="row">.
                <div class="accueil">
                        <div class="homes">
                            <div class="home">
                                <?php  ?>
                            </div>
                            <div class="samb">
                                <h2>VOTRE SCORE</h2>
                                <input type="text">
                            </div>
                            <h3>Ssssss <br> Dddddd</h3>
                        </div>
                        <div class="subs-menu">
                            <div class="Ams">
                            <a href="index.php?lien=jeux&noms=1">TOP SCORE</a>
                            </div>
                            <div class="Ams">
                                <a href="index.php?lien=jeux&noms=2">MON MEILLEUR SCORE</a>
                            </div>
                            <div class="M">
                                <?php
                                if (isset($_GET['noms'])) 
                                {    		
                                    if ($_GET['noms']=="1") {
                                            require_once("top.php");
                                        }
                                        elseif($_GET['noms']=="2") 
                                        {
                                            include_once("resultat.php");
                                        }
                                    
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <div class="affiche">
                    <?php  
                    ?>
                </div>
            </div>
    </div>
</body>
</html>