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
	<td><h3><i>LISTE DES JOUEURS PAR SCORE</i></h3></td>
		
</table>
<table border="5px" class="scroll">
<tr>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>SCORE</th>
      </tr>
<?php

require_once('dbconn.php');

$sth = $dbconn->prepare("SELECT * FROM `user` u, `avoir` a, `score` s WHERE u.id_user= a.id_user AND s.id= a.id And role='joueur' order by score DESC");
$sth->execute();
/* Fetch all of rows in the result set */
$result = $sth->fetchAll();

	foreach($result as $row){ ?>
	  <tr>
		<td><?php echo $row['prenom']; ?></td>
		<td><?php echo $row['nom']; ?></td>
		<td><?php echo $row['score']; ?></td>
	  </tr>
	<?php } ?>
</table>
<div class="demo" id="demo"></div>
<script>
$('#demo').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 50],
    pageSize: 5,
    showPageNumbers: false,
    showNavigator: true,
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
})
</script>
</body>
</html>