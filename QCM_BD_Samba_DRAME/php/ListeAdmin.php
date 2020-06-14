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
		  width: 250px;
          font-family: Arial, Helvetica, sans-serif;
          font-weight: bold;
          text-align: center;
        }
        .scroll{
          max-height: 250px;
          display: block;
          overflow-y: auto;
          font-size: 22.3px;
        }
        .scroll td, .scrool th{
          text-align: center;
        }
        tr:nth-child(event){background-color: #181b2f}
        tr:nth-child(odd){background-color: gray}
	</style>
</head>
<body>
	<table border="5px">
		<td><h3><i>LISTE DES ADMINS</i></h3></td>
	</table>
	<table border="5px" class="scroll">
		<tr>
			<td>ID</td>
			<td>PRENOM</td>
			<td>NOM</td>
			<td>LOGIN</td>
		</tr>
		<?php
			require_once('dbconn.php');
			$std = $dbconn->prepare("SELECT * FROM `user` WHERE role='admin' order by id_user ASC");
			$std->execute();
			/* Fetch all of rows in tde result set */
			$result = $std->fetchAll();

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