<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LISTE DES JOUEURS</title>
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
	<td><h3><i>LISTE DES ADMINS</i></h3></td>
</table>
<table border="5px">
	<tr>
		<th>ID</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>LOGIN</th>
      </tr>
<?php

require_once('dbconn.php');

$sth = $dbconn->prepare("SELECT * FROM `user` WHERE role='admin' order by id_user desc");
$sth->execute();
/* Fetch all of rows in the result set */
$result = $sth->fetchAll();

	foreach($result as $row){ ?>
	  <tr>
	  <td><?php echo $row['id_user']; ?></td>
		<td><?php echo $row['prenom']; ?></td>
		<td><?php echo $row['nom']; ?></td>
		<td><?php echo $row['login']; ?></td>
	  </tr>
	<?php } ?>
</table>
</div>
</body>
</html>