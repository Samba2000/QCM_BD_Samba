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
   .A img {
      float: right;
      margin-right: 10%;
      margin-top: 4%;
    }
    .A {
       width: 90%;
       border-radius: 10px;
        margin-left: 5%;
        font-weight: bold;
        height: 50px;
        margin-top: 30px;
        background-color: #01FEEF;
        cursor: pointer;
      }
    .sub-menu {
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
      height: 100px;
      border-radius: 10px;
    }
    .A a:hover{
      color: orangered;
      border-bottom: 2px solid gold;
    }
    .A a{
      color: black;
      border-bottom: 2px solid transparent;
    }
    .homes span{
      display: block;
      font-weight: bold;
    }
    .spans{
      margin-top: 10%;
      float: right;
      margin-right: 60%;
    }
    .affiche{
      width: 700px; background-color: #B8B8B8; border-radius: 5px; height: 450px; margin-left: 38%; margin-top: -9%;
    }
    .row{
      background-color: #FFFFFF; width: 85%; height: 480px; margin-top: 1%; border-radius: 10px; margin-left: 8%;
    }
    .accueil{
      margin-left: 1%;
      margin-top: -0.5%;
    }
    .content{
      margin-top: -2%;
    }
    .content h1{
      margin-top: 1%;
      float: left;
      margin-left: 20%;
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
    .A a{
      margin-left: 5%; text-decoration: none;font-size: 30px;margin-top: 5%;
    }
    @media screen and (max-width: 1160px){
      .body{
        display: block;
      }
      .haed{
        height: 45px;
      }
      .content h1{
        font-size: 25px;
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
        font-size: 20px;
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
        font-size: 15px;
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
        margin-left: 30px;
      }
      .content h2{
        font-size: 12px;
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
      .spans{
      margin-top: 10%;
      float: right;
      margin-right: 50%;
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
      .spans{
      margin-top: 10%;
      float: right;
      margin-right: 50%;
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
      .spans{
      margin-top: 5%;
      float: right;
      margin-right: 70%;
      }
      .affiche{
      margin-top: 55%;
      }
      
    }
    @media screen and (max-width: 715px){
      .spans{
      margin-top: 5%;
      float: right;
      margin-right: 60%;
      }
      .affiche{
      margin-top: 70%;
      }
      
    }
  </style>
</head>
<body>
<div class="content">
  <div class="haed">
  <h1>CREER ET PARAMETRER VOTRE QUIZZ</h1>
  <a href="#" class="deconnexion" id="deconnexion">Deconnexion</a>
  </div>
  <div class="row">
    .
  <div class="accueil">
    <div class="homes">
      <div class="home">
          <?php  ?>
      </div>
      <div class="spans">
          <span>Ssssss</span>
          <span>Dddddd</span>
      </div>
    </div>
        <div class="sub-menu">
          <div class="A">
           <a href="#" id="question" class="admin">Questions</a>
            <img src="image/ic-liste-active.png" alt="">
          </div>
          <div class="A">
            <a href="#" id="admin" class="admin">Admin</a>
            <img src="image/ic-ajout-active.png" alt="">
          </div>
           <div class="A">
            <a href="#" id="joueur" class="admin">Joueurs </a>
             <img src="image/ic-liste.png" alt="">
          </div>
          <div class="A">
            <a href="#" id="nbreq" class="admin">NBRE Questions</a>
             <img src="image/ic-ajout.png" alt=""> 
          </div>
        </div>
  <div class="affiche" id="affiche">
  </div>
</div>
  </div>
</div>
<script src="js/admin.js"></script>
</body>
</html>