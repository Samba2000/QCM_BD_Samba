<?php 

require_once('dbconn.php');

if(!empty($_POST['nombre']) && isset($_POST['nombre']) )
{
    $nombre = $_POST['nombre'];
    $id = $_POST['id'];
    $sql = "UPDATE `qcm`.`nombre` SET `nombre` = '$nombre' WHERE `nombre`.`nombre` = '$id'";
    if ($dbconn->query($sql) === TRUE) {
      echo "ok";
    } else {
      echo "Error updating record";
    }
}
?> 