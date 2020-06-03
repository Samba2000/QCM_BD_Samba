<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
</head>
<body style="text-align: center;">
  <form  method="POST" action="">
  	<div style=" text-align: center; width: 80%; margin-left: 10%; background-color: white; border-radius: 10px; height: 600px; margin-top: 10%;">
  		<div style="margin-left: -40%;">
  <div style="font-size: 25px; font-family: arial; margin-left: -23%;"><strong>S'inscrire</strong></div>
  <div style="font-size: 15px; font-family: arial ; margin-left: -9%"><strong>Pour tester votre niveau de culture générale</strong></div>
  <p style="margin-left: -26%">Prenom</p>
  <div style="width: 100%;margin-bottom: -1%">
  <input type="Text" name="prenom"  value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom']; ?>" placeholder="Abba" style="height: 35px; width: 30%;;margin-left: 0%;border-radius: 5px 5px 5px 5px" required> <br/>
  </div>
  <p style="margin-left: -28%">Nom</p>
   <div style="width: 100%;margin-bottom: -1%">
  <input type="Text" name="nom"  value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>" placeholder="ABAB" style="height: 35px; width: 30%;;margin-left: 0%;border-radius: 5px 5px 5px 5px" required> <br/>
  </div>
  <p style="margin-left: -28%">login</p>
  <div style="width: 100%;margin-bottom: -1%">
  <input type="text" name="login"  value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" placeholder="aabb" style="height: 35px; width: 30%;; margin-left: 0%; border-radius: 5px 5px 5px 5px;" required> <br/>
  </div>
  <p style="margin-left: -26%">Password</p>
   <div style="width: 100%;margin-bottom: -1%">
  <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" style="height: 35px; width: 30%;;margin-left: 0%;border-radius: 5px 5px 5px 5px" required> <br/>
  </div>
  <p style="margin-left: -20%">Confirmation password</p>
   <div style="width: 100%;margin-bottom: -1%">
  <input type="password" name="cpassword"  value="<?php if (isset($_POST['cpassword'])) echo $_POST['cpassword']; ?>" style="height: 35px; width: 30%;;margin-left: 0%;border-radius: 5px 5px 5px 5px" required> <br/>
  </div>
  <div style=" margin-top: 2%;">
  <form method="POST" action="" enctype="multipart/form-data" >
   <b>Avatar</b> <input type="file" accept="image/*" onchange="loadFile(event)"  style="margin-left: 11%;" >
</form>
</div>
  <input type="submit" name=" valider" value="Créer compte" style="height: 35px; width:200px;  border-radius: 5px 5px 5px 5px; background-color: green;  margin-top: 2%; margin-left: 1%;" /> <br/>
</div>
  </div>
  <?php  
  include ('fonction.php');
  if (isset($_POST['login']) and isset($_POST['password'])) 
  {
    if (valid_Prenom($_POST['prenom']) && valid_Nom($_POST['nom']) && valid_password($_POST['password'], $_POST['cpassword'])) 
    {

  ?>
</form>
</div>
</body>
</fieldset>
</form>
</html>
<div style="margin-top: -30%; margin-left: 45%;">
<h3>Avatar Joueur</h3>
<div style="margin-top: -35%; margin-left: 35% ;overflow: hidden; border-radius: 100px; -webkit-border-radius: 100px; -moz-border-radius: 70px; height: 200px; width: 200px;">
<img id="output"/>
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
</div>
</div>
