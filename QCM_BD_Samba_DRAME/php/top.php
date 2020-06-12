<?php include 'dbconn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Top Score</title>
	<style>
		table{
			width: 100%;
		}
		td{
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
<table border="5px">
      <thead>
        <tr>
          <th>Prenom</th>
          <th>Nom</th>
          <th>Score</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            $table = $dbconn->prepare("SELECT u.prenom, u.nom, s.score FROM `user` u, `score` s, `avoir` a WHERE role='joueur' AND u.id_user=a.id_user AND s.id=a.id");
            $table->execute();
            /* Fetch all of rows in the result set */
            $result = $table->fetchAll();

            foreach($result as $row){  ?>
             <tr>
              <td><?php echo $row['prenom']; ?></td>
              <td><?php echo $row['nom']; ?></td>
              <td><?php echo $row['score']; ?></td>
             </tr>
          <?php  }
          ?>
      </tbody>
</table>
</body>
</html>