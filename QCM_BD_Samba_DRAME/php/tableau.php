<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau De Bord</title>
    <style>
        table{
            width: 100%;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="5px">
    <td>Nombre De Questions</td>
    <td>Nombre D'utilisateurs</td>
    <td>Fréquence De Jeu D'un Joueur</td>
    <?php

        require_once('dbconn.php');

        $sth = $dbconn->prepare("SELECT * FROM `question` group by id order by id desc");
        $sth->execute();
        /* Fetch all of rows in the result set */
        $result = $sth->fetchAll();

        $sql = $dbconn->prepare("SELECT * FROM `user` group by id_user order by id_user desc");
        $sql->execute();
        /* Fetch all of rows in the result set */
        $res = $sql->fetchAll();
        $p=0;
        $u=0;
            foreach($result as $row){ 
                $p++;
            }
            foreach($res as $value){ 
                $u++;
            }?>
            <tr>
                <td><?php echo $p; ?></td>
                <td><?php echo $u; ?></td>
                <td><?php echo count(array_count_values($row)); ?></td>
            </tr>
    </table>
</body>
</html>