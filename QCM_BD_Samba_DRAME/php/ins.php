<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer Un Joueur</title>
    <style>
            *{
            box-sizing: border-box;
        }
        :root{
            --success-color: green;
            --error-color: red;
        }

        body{
            padding: 0;
            margin: 0;
        }
        .container{
            background-image: url(../image/facade.jpg);
            border-radius: 5px;
            width: 90%;
            height: 500px;
        }
        h2{
            text-align: center;
            margin: 0 0 20px;
            font-size: 40px;
            font-weight: bold;
        }
        .form{
            margin-top: -10px;
            padding: 30px 40px;
            height: 400px;
        }
        .form-control{
            position: relative;
        }
        .form-control img{
        margin: -16% 0 0 93%;
        width: 25px;
        }
        .form-control label{
            display: block;
            margin-bottom: 0px;
        }
        .form-control input{
            border: 2px solid gray;
            border-radius: 5px;
            width: 40%;
            padding: 10px;
            font-size: 15px;
        }
        .form-control input:focus{
            outline: 0;
            border-color: #777;
        }
        .erreur-message{
            color: red;
            display: inline;
        }
        .form button{
            cursor: pointer;
            background-color: var(--success-color);
            border-radius: 5px;
            display: block;
            font-size: 16px;
            padding: 10px;
            margin-top: 20px;
            width: 40%;
        }
        .form a{
            float: right;
            margin-top: -10%;
            font-size: 30px;
            color: blue;
            border-radius: 5px;
        }
        .home{
        margin-left: 70%;
        margin-top: -30%;
        }
        .home img{
        margin-top: -10%; 
        margin-left: -12% ;
        overflow: hidden; 
        border-radius: 100px; 
        -webkit-border-radius: 100px; 
        -moz-border-radius: 70px; 
        height: 200px; 
        width: 200px;
        background-color: red;
            border: 5px solid blue;
        }
        .home h3{
        margin-top: -1%;
        }
        @media screen and (max-width: 1300px){
          .home{
          margin-top: -33%;
          }
          h2{
            font-size: 35px;
          }
          
        }
        @media screen and (max-width: 1150px){
          .home{
          margin-top: -33%;
          }
          h2{
            font-size: 30px;
          }
          
        }
        @media screen and (max-width: 1000px){
          .home{
          margin-top: -45%;
          }
          h2{
            font-size: 22px;
          }
          
        }
        @media screen and (max-width: 560px){
          .home{
          margin-top: -20%;
          margin-left: 50%;
          }
          .form-control{
            width: 700px;
          }
          h2{
            font-size: 20px;
          }
          .container{
            height: 700px;
          }
        }
    </style>
    <script type="text/javascript"src="../js/jquery.js"></script>
    <script>
      $(function() {
        $("#prenom-erreur").hide();
        $("#nom-erreur").hide();
        $("#login-erreur").hide();
        $("#password-erreur").hide();
        $("#conf-erreur").hide();

        var erreur_prenom = false;
        var erreur_nom = false;
        var erreur_login = false;
        var erreur_password = false;
        var erreur_conf = false;


        $("#prenom").focusout(function(){

            check_prenom();

        });
        $("#nom").focusout(function(){

            check_nom();

        });
        $("#login").focusout(function(){

          check_login();

        });
        $("#password").focusout(function(){

          check_password();

        });
        $("#password2").focusout(function(){

            check_conf();

        });

        function check_prenom(){
          var prenom_length = $("#prenom").val().length;
          if($("#prenom").val() == ''){
            $("#prenom-erreur").html('Veuillez entrer votre prenom');
            $("#prenom-erreur").show();
          }
          else if(!$("#prenom").val().match(/^[A-Z]{1}[a-z]+$/)){
            $("#prenom-erreur").html('Votre prenom doit commencé par un majuscule');
            $("#prenom-erreur").show();
          }
          else if(prenom_length < 3 || prenom_length > 15){
            $("#prenom-erreur").html('Le prenom doit etre compris entre 3 et 15 caratères');
            $("#prenom-erreur").show();
            erreur_prenom = true;
          }
          else{
            $("#prenom-erreur").hide();
            $("#prenom").css("border-color", "green");
          }
        }

        function check_nom(){
          var nom_length = $("#nom").val().length;
          if($("#nom").val() == ''){
            $("#nom-erreur").html('Veuillez entrer votre nom');
            $("#nom-erreur").show();
          }
          else if(!$("#nom").val().match(/^[A-Z]+$/)){
            $("#nom-erreur").html('Votre nom ne doit composé que des majuscules');
            $("#nom-erreur").show();
          }
          else if(nom_length < 2 || nom_length > 8){
            $("#nom-erreur").html('Le nom doit etre compris entre 5 et 15 caratères');
            $("#nom-erreur").show();
            erreur_nom = true;
          }
          else{
            $("#nom-erreur").hide();
            $("#nom").css("border-color", "green");
          }
        }

        function check_login(){
          var login_length = $("#login").val().length;
          if($("#login").val() == ''){
            $("#login-erreur").html('Veuillez entrer votre login');
            $("#login-erreur").show();
          }
          else if(!$("#login").val().match(/^[a-z]+$/i)){
            $("#login-erreur").html('Veuillez entrer votre login valide');
            $("#login-erreur").show();
          }
          else if(login_length < 5 || login_length > 15){
            $("#login-erreur").html('Le login doit etre compris entre 5 et 15 caratères');
            $("#login-erreur").show();
            erreur_login = true;
          }
          else{
            $("#login-erreur").hide();
            $("#login").css("border-color", "green");
          }
        }

        function check_password(){
          var password_length = $("#password").val().length;
          if($("#password").val() == ''){
            $("#password-erreur").html('Veuillez entrer votre password');
            $("#password-erreur").show();
          }
          else if(password_length < 8){
            $("#password-erreur").html('Le password doit avoir au moins 8 caratères');
            $("#password-erreur").show();
            erreur_password = true;
          }
          else{
            $("#password-erreur").hide();
            $("#password").css("border-color", "green");
          }
        }

        function check_conf(){
        
            if($("#password2").val() == ''){
            $("#conf-erreur").html('Veuillez confirmer votre password');
            $("#conf-erreur").show();
            }
            else if($("#password").val() != $("#password2").val()){
              
            $("#conf-erreur").html('Les password ne correspondent pas');
            $("#conf-erreur").show();
          }
          else{
            $("#conf-erreur").hide();
            $("#password2").css("border-color", "green");
          }
        }

        form.addEventListener('submit',(e)=> {
            
          e.preventDefault();
          erreur_prenom = false;
          erreur_nom = false;
          erreur_conf = false;
          erreur_login = false;
          erreur_password = false; 

          check_prenom();
          check_nom();
          check_login();
          check_password();
          check_conf();

          if(erreur_login == false && erreur_password == false && erreur_nom == false && erreur_prenom == false && erreur_conf == false){
            return true;
          }else{
            return false;
          }

        });
      });
    </script>
</head>
<body>
    <div class="container">
        <form class="form" id="form" method="post">
            <h2>BIENVENUE SUR LA PAGE D'INSCRIPTION DU JOUEUR</h2>
            <div class="form-control">
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom"
                placeholder="Entrer ton prenom">
                 <span class="erreur-message" id="prenom-erreur"></span>
            </div>
            <div class="form-control">
                <label for="nom">Nom</label>
                <input type="text" id="nom"
                placeholder="Entrer ton nom">
                 <span class="erreur-message" id="nom-erreur"></span>
            </div>
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" id="login"
                placeholder="Entrer ton login">
                <span class="erreur-message" id="login-erreur"></span>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password"
                placeholder="Entrer ton password">
                 <span class="erreur-message" id="password-erreur"></span>
            </div>
            <div class="form-control">
                <label for="password2">Confirmation Password</label>
                <input type="password" id="password2"
                placeholder="confirmer ton password">
                 <span class="erreur-message" id="conf-erreur"></span>
            </div> <br>
            Choisir un fichier : <input type="file" accept="image/*" onchange="loadFile(event)">
            <button type="submit" name="btn_submit">Creer Un Compte</button>
            <div class="home">
            <img id="output"/>
              <h3>Avatar Joueur</h3>
              <script>
                var loadFile = function(event) {
                  var reader = new FileReader();
                  reader.onload = function(){
                    var output = document.getElementById('output');
                    output.src = reader.result;
                  };
                  reader.readAsDataURL(event.target.files[0]);
                };
              </script>
            </div>
        </form>
    </div>
</body>
</html>