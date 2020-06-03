<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	textarea{
		border-radius: 10px;
		margin-left: 48%;
		display: block;
		text-align: center;
	}
	input{
		border-radius: 5px;
		float: right;
		height: 40px;
		width: 100px;
		margin-right: 28%;
		margin-top: 10%;
		background-color: #01FEEF;
	}
	.day{
		width: 400px;
		margin-left: 20%;
	}
	</style>
</head>
<body>
	<div class="day">
<h1> Nbre de questions/Jeu </h1>
<form method="POST" action="">
		<textarea name="nombre" id="nombre" cols="8" rows="3" ></textarea>
		<input type="submit" name="valider" id="valider" value="Enregistrer"> <br/>
		<span id="miss"></span>
</form>
	</div>
<script>
var nb = document.getElementById('nombre');
var ok = document.getElementById('valider');
var miss = document.getElementById('miss');
ok.addEventListener('click', valider);
function valider(e)
{
	if(nb.value=='')
	{
		e.preventDefault();
		nb.style.border="2px solid red";
	}
	else if(nb.value<5)
	{
		e.preventDefault();
		miss.textContent = "Le nombre doit etre supérieur à 5";
		miss.style.color = "orange";
	}
}
</script>
<?php 
if(!empty($_POST['nombre']))
{
    $nombre=file_get_contents("./asset/json/nombre.json");
    $nombre=json_decode($nombre, true);

            $membres_Admin['nombre'] = $_POST['nombre'];

            $nombre = $membres_Admin;

            $nombre = json_encode($nombre);
            
            file_put_contents("./asset/json/nombre.json", $nombre);
            
            echo "<h2> Nombre de Question modifiée</h2>";

}
?>
</body>
</html> 