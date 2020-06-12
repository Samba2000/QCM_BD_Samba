<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=qcm;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['question']) && isset($_POST['nbp']) && !empty($_POST['question']) && !empty($_POST['nbp']) && isset($_POST['reponse']) && !empty($_POST['reponse']))
{
    $question = $_POST['question'];
    $nbp = $_POST['nbp'];
    $reponse = $_POST['reponse'];
    $choix = $_POST['choix'];
    $id = $_POST['id'];
   
    $bdd->exec("INSERT INTO `qcm`.`question` (`id`, `question`, `typeQuestion`, `reponse`, `nbpoint`, `id_user`) VALUES (NULL, '$question', '$choix', '$reponse', '$nbp', '$id')");
    echo 'ok';
}
  
?>