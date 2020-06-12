<?php include 'dbconn.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery.js"></script>
  <style>
		table{
            width: 100%;
        }
        td{
			text-align: center;
		}
        .fort{
            margin-bottom: 2%; margin-left: 2%; margin-top: 1%; float: left;
        }
        .form-controle{
            width: 500px; height: 50px; border-radius: 5px; text-align: center;
        }
        button{
            background-color: green; height: 40px; width: 150px; border-radius: 5px; margin-left: 5%;
        }
	</style>
  <title>Modificationt</title>
</head>
<body>
  <div class="cont">
    <table border="5px">
      <thead>
        <tr>
          <th>Nombre de Questions par jeu</th>
          <th>Modifier</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            $table = $dbconn->prepare("SELECT * FROM nombre");
            $table->execute();
            /* Fetch all of rows in the result set */
            $result = $table->fetchAll();

            foreach($result as $row){  ?>
             <tr id="<?php echo $row['nombre']; ?>">
              <td data-target="nombre"><?php echo $row['nombre']; ?></td>
              <td><a href="#" data-role="modifier" data-id="<?php echo $row['nombre']; ?>">Modifier</a></td>
             </tr>
          <?php  }
          ?>
      </tbody>
    </table>
  </div>

             <form action="" method="post" id="form">
              <div class="form-group">
                  <div class="fort">
                    <b>Nombre De Questions Par Jeu</b>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>" class="form-controle">
                  </div>
                  <input type="hidden" name="id" id="id" value="<?php echo $row['nombre']; ?>" class="form-control">
                <button type="submit">Enregistrer</button>
              </div>
             </form>
</body>

<script>
  $(document).ready(function(){
    $(document).on('click', 'a[data-role=modifier]',function(){
      var id = $(this).data('id');
      var nombre = $('#'+id).children('td[data-target=nombre]').text();
      $('#nombre').val(nombre);
      $('#id').val(id);

    });
      $('#form').submit(function(){
          nombre = $('#nombre').val();
		  id = $('#id').val();
          if(nombre ==''){
            alert('Remplissez le champ');
            return false;
          }else{
            $.post('php/fixe.php', {nombre: nombre, id: id}, function(data){
                if(data=='ok'){
					$('#'+id).children('td[data-target=nombre]').text(nombre);
				}
            });
          }
            return false;
      });
  });
</script>

</html>