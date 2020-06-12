<?php 

require_once('dbconn.php');

if(isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
{
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $sql = "UPDATE `qcm`.`user` SET `password` = '$password', `prenom` = '$prenom', `nom` = '$nom', `login` = '$login' WHERE `user`.`id_user` = '$id'";
  if ($dbconn->query($sql) === TRUE) {
    echo "ok";
  } else {
    echo "Error updating record";
  }
}
?> 