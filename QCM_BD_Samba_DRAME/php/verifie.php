<?php 
    require_once('dbconn.php');

   if(isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
   {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql="SELECT * FROM `user` WHERE login='$login' AND password='$password' AND role='admin'";
    $sth = $dbconn->prepare($sql);
    $sth->execute();
    /* Fetch all of rows in the result set */
    $result = $sth->fetchAll();
    $req="SELECT * FROM `user` WHERE login='$login' AND password='$password' AND role='joueur'";
    $st = $dbconn->prepare($req);
    $st->execute();
    /* Fetch all of rows in the result set */
    $res = $st->fetchAll();
    if(count($result)>=1)
    {
        echo 'ok';
    }
    else if(count($res)>=1)
    {
        echo 'jeu';
    }
   }
?>