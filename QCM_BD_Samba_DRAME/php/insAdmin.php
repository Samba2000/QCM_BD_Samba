<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer Un Admin</title>
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
        .count{
            background-image: url(../image/facade.jpg);
            border-radius: 5px;
            width: 100%;
        }
        h4{
            text-align: center;
            margin: 0 0 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .form{
            padding: 30px 40px;
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
            padding: 6px;
            font-size: 15px;
        }
        .form-control input:focus{
            outline: 0;
            border-color: #777;
        }
        .erreur-message{
            display: inline;
            color: red;
        }
        .form button{
            cursor: pointer;
            background-color: var(--success-color);
            border-radius: 5px;
            display: block;
            font-size: 16px;
            padding: 10px;
            width: 40%;
        }
        .form a{
            float: right;
            margin-top: -10%;
            font-size: 30px;
            color: blue;
            border-radius: 5px;
        }
        .hom{
        margin-left: 70%;
        margin-top: -45%;
        }
        .hom img{
        margin-top: -10%; 
        overflow: hidden; 
        border-radius: 100px; 
        -webkit-border-radius: 120px; 
        -moz-border-radius: 90px; 
        height: 120px; 
        width: 120px;
        background-color: red;
      border: 5px solid blue;
        }
    </style>
        <script type="text/javascript"src="js/jquery.js"></script>
    <script>
      $(function() {
        $("#prenom-erreur").hide();
        $("#nom-erreur").hide();
        $("#login-erreur").hide();
        $("#password-erreur").hide();
        $("#conf-erreur").hide();

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

        $('#form').submit(function(){
          login = $(this).find('input[name=login]').val();
          password = $(this).find('input[name=password]').val();
          prenom = $(this).find('input[name=prenom]').val();
          nom = $(this).find('input[name=nom]').val();
          password2 = $(this).find('input[name=password2]').val();
          if(login=='' || password=='' || prenom=='' || nom=='' || password2==''){
            alert('Remplissez tous les champs');
            return false;
          }else{
            $.post('php/verifierAdmin.php', {prenom: prenom, nom: nom, login: login, password: password, password2: password2}, function(data){
              if(data == 'echec')
              {
                alert('Ce Login existe déjà');
              }
              else
              {
                alert('Vous etes inscris maintenant');
              }
            });
            return false;
          }
        });
      });
    </script>
</head>
<body>
    <div class="count">
        <form class="form" id="form" method="post">
            <h4>BIENVENUE SUR LA PAGE D'INSCRIPTION ADMIN</h4>
            <div class="form-control">
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom"
                placeholder="Entrer ton prenom">
                 <span class="erreur-message" id="prenom-erreur"></span>
            </div>
            <div class="form-control">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom"
                placeholder="Entrer ton nom">
                 <span class="erreur-message" id="nom-erreur"></span>
            </div>
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" id="login" name="login"
                placeholder="Entrer ton login">
                <span class="erreur-message" id="login-erreur"></span>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                placeholder="Entrer ton password">
                 <span class="erreur-message" id="password-erreur"></span>
            </div>
            <div class="form-control">
                <label for="password2">Confirmation Password</label>
                <input type="password" id="password2" name="password2"
                placeholder="confirmer ton password">
                 <span class="erreur-message" id="conf-erreur"></span>
            </div> 
            <input type="file" accept="image/*" onchange="loadFile(event)">
            <button type="submit" name="btn_submit">Creer Un Compte</button>
            <div class="hom">
            <img id="output"/>
              <h3>Avatar Admin</h3>
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