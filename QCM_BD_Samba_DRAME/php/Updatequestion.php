<?php 

require_once('dbconn.php');

if(isset($_POST['question']) && isset($_POST['nbp']) && !empty($_POST['question']) && !empty($_POST['nbp']) && isset($_POST['reponse']) && !empty($_POST['reponse']))
{
    $question = $_POST['question'];
    $nbp = $_POST['nbp'];
    $reponse = $_POST['reponse'];
    $choix = $_POST['choix'];
    $id = $_POST['id'];

    $sql = "UPDATE `qcm`.`question` SET `reponse` = '$reponse', `question` = '$question', `nbpoint` = '$nbp', `typeQuestion` = '$choix' WHERE `question`.`id` = '$id'";
    if ($dbconn->query($sql) === TRUE) {
      echo "ok";
    } else {
      echo "Error updating record";
    }
}
?> 