<?php 
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=qcm;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    if (isset($_POST['id']) && !empty($_POST['id']))
    { 
        $id = $_POST['id'];
        $bdd->exec("DELETE FROM `qcm`.`question` WHERE `question`.`id` = '$id'"); 
           echo "ok"; 
    }
    ?>