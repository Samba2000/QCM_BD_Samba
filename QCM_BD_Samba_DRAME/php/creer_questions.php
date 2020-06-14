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
			font-family: Arial, Helvetica, sans-serif;
			font-weight: bold;
			text-align: center;
		}
		.scroll{
			max-height: 300px;
			display: block;
			overflow-y: auto;
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
	<td><h3><i>LISTE DES QUESTIONS</i></h3></td>
</table>
<table border="5px" class="scroll">
		<tr>
			<th>ID_QUESTION</th>
			<th>QUESTION</th>
			<th>TYPE</th>
			<th>REPONSE</th>
			<th>POINTS</th>
		</tr>
<?php

require_once('dbconn.php');

$sth = $dbconn->prepare("SELECT * FROM `question` order by id Asc");
$sth->execute();
/* Fetch all of rows in the result set */
$result = $sth->fetchAll();

	foreach($result as $row){ ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['question']; ?></td>
			<td><?php echo $row['typeQuestion']; ?></td>
			<td><?php echo $row['reponse']; ?></td>
			<td><?php echo $row['nbpoint']; ?></td>
		</tr>
	<?php } ?>
</table>
</body>
</html>