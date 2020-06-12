<?php

require_once('dbconn.php');

if(isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
{
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
 $login = $_POST['login'];
 $password = $_POST['password'];
 $sql="SELECT login FROM `user` WHERE login='$login'";
 $sth = $dbconn->prepare($sql);
 $sth->execute();
 /* Fetch all of rows in the result set */
 $result = $sth->fetchAll();
 if(count($result)>=1)
 {
     echo 'echec';
 }
 else
 {
    $req = "INSERT INTO `user` (`id_user`, `password`, `role`, `prenom`, `nom`, `login`) VALUES (NULL, '$password', 'admin', '$prenom', '$nom', '$login')";
    $st = $dbconn->prepare($req);
    $st->execute();
    /* Fetch all of rows in the result set */
    $re = $st->fetchAll();
    echo 'ok';
 }
}
?>