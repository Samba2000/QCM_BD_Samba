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
        .form-control{
            width: 100px; height: 40px; border-radius: 5px;
        }
        button{
            background-color: green; height: 40px; width: 150px; border-radius: 5px;
        }
	</style>
  <title>Modificationt</title>
</head>
<body>
  <div class="cont">
    <table border="5px">
      <thead>
        <tr>
          <th>ID_USER</th>
          <th>Prenom</th>
          <th>Nom</th>
          <th>Login</th>
          <th>Password</th>
          <th>Modifier Un Admin</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            $table = $dbconn->prepare("SELECT *FROM user WHERE role='admin'");
            $table->execute();
            /* Fetch all of rows in the result set */
            $result = $table->fetchAll();

            foreach($result as $row){  ?>
             <tr id="<?php echo $row['id_user']; ?>">
              <td data-target="id_user"><?php echo $row['id_user']; ?></td>
              <td data-target="prenom"><?php echo $row['prenom']; ?></td>
              <td data-target="nom"><?php echo $row['nom']; ?></td>
              <td data-target="login"><?php echo $row['login']; ?></td>
              <td data-target="password"><?php echo $row['password']; ?></td>
              <td><a href="#" data-role="modifier" data-id="<?php echo $row['id_user']; ?>">Modifier</a></td>
             </tr>
          <?php  }
          ?>
      </tbody>
    </table>
  </div>

             <form action="" method="post" id="form">
              <div class="form-group">
                <div class="fort">
                  <label>Prenom</label>
                  <input type="text" name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>" class="form-control">
                </div>
                <div class="fort">
                  <label>Nom</label>
                  <input type="text" name="nom" id="nom" value="<?php echo $row['nom']; ?>" class="form-control">
                </div>
                <div class="fort">
                  <label>Login</label>
                  <input type="text" name="login" id="login" value="<?php echo $row['login']; ?>" class="form-control">
                </div>
                <div class="fort">
                  <label>Password</label>
                  <input type="text" name="password" id="password" value="<?php echo $row['password']; ?>" class="form-control">
                </div>
                  <input type="hidden" name="id" id="id" value="<?php echo $row['id_user']; ?>" class="form-control">
                </div>
                <button type="submit" id="save">Modifier</button>
              </div>
             </form>
</body>

<script>
  $(document).ready(function(){
    $(document).on('click', 'a[data-role=modifier]',function(){
      var id = $(this).data('id');
      var prenom = $('#'+id).children('td[data-target=prenom]').text();
      var nom = $('#'+id).children('td[data-target=nom]').text();
      var login = $('#'+id).children('td[data-target=login]').text();
      var password = $('#'+id).children('td[data-target=password]').text();
      $('#prenom').val(prenom);
      $('#nom').val(nom);
      $('#login').val(login);
      $('#password').val(password);
      $('#id').val(id);

    });

      $('#save').click(function(){
          prenom = $('#prenom').val();
          nom = $('#nom').val();
          login = $('#login').val();
          password = $('#password').val();
          id = $('#id').val();
          if(login=='' || password=='' || prenom=='' || nom==''){
            alert('Remplissez tous les champs');
            return false;
          }else{
            $.post('php/UpdateAdmin.php', {prenom: prenom, nom: nom, login: login, password: password, id: id}, function(data){
              if(data == 'ok'){
                $('#'+id).children('td[data-target=prenom]').text(prenom);
                $('#'+id).children('td[data-target=nom]').text(nom);
                $('#'+id).children('td[data-target=login]').text(login);
                $('#'+id).children('td[data-target=password]').text(password);
              }
            });
          }
          return false;
      });
  });
</script>

</html>