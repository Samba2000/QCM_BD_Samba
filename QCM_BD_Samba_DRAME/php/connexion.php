<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
  
    <title>Form Validation</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript"src="js/jquery.js"></script>
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

        form.addEventListener('submit',(e)=> {
          e.preventDefault();

          erreur_login = false;
          erreur_password = false; 

          check_login();
          check_password();

          if(erreur_login == false && erreur_password == false){
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
                <a href="php/inscription.php" class="link">S'inscrire pour jouer</a>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  </body>
</html>