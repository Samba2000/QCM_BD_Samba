
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
       <div class="container" id="container">
            <form method="post" action="" class="form" id="form">
                <h2>password Form</h2>
                <div class="form-control">
                    <label for="password">Login</label>
                    <input type="text" id="login" placeholder="Login" name="login">
                    <span class="erreur-message" id="login-erreur"></span>
                </div>
                <div class="form-control">
                    <label for="password">password</label>
                    <input type="password" id="password" placeholder="password" name="password">
                    <span class="erreur-message" id="password-erreur"></span>
                </div>
                <button type="submit" class="btn btn-success" name="btn_submit" id="btn-submit">Connexion</button>
                <a class="link" href="#" id="link">S'inscrire pour jouer</a>
            </form>
        </div>
    <script>
      $(function() {
        $("#login-erreur").hide();
        $("#password-erreur").hide();

        var erreur_login = false;
        var erreur_password = false;

        $("#login").focusout(function(){

          check_login();

        });
        $("#password").focusout(function(){

          check_password();

        });

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

        $('#form').submit(function(){
          login = $(this).find('input[name=login]').val();
          password = $(this).find('input[name=password]').val();
          
          $.post('php/verifie.php', {login: login, password: password}, function(data){
            if(data == 'ok'){
              $('#content').load('php/admin.php');
              $('#container').fadeOut();
            }
            else  if(data == 'jeu')
            {
              $('#content').load('php/jouer.php');
              $('#container').fadeOut(); 
            }
          });
          return false;
        });

        $('.link').click(function(e){
                if(e.target.id === 'link'){
                $('#content').load('php/inscription.php');
            }
        });

       });
    </script>
</body>
</html>