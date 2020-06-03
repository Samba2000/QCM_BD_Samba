<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> QUIZZ </title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<div class="header">
<div class="logo "></div>
<div class="header-text">Le Plaisir De Jouer</div>
</div>
<div class="content">
	
<?php  
session_start();

if (isset($_GET['lien'])) 
{
	if ($_GET['lien']=='accueil')
	{
	 		require_once("php/admin.php");
	}
elseif ($_GET['lien']=='jeux')
	{
		require_once("php/jouer.php");
	 } 
	
}
else
{
	if (isset($_GET['statut']) && $_GET['statut']==="logout") 
	{
		deconnexion();
	}
	require_once("php/connexion.php");
}

?>

</div>
</body>
</html>