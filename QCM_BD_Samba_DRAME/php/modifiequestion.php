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
          font-family: Arial, Helvetica, sans-serif;
          font-weight: bold;
          text-align: center;
        }
        .scroll{
          max-height: 250px;
          display: block;
          overflow-y: auto;
        }
        .scroll td, .scrool th{
          text-align: center;
        }
        tr:nth-child(event){background-color: #181b2f}
        tr:nth-child(odd){background-color: gray}
        .fort{
            margin-bottom: 2%; margin-left: 2%; margin-top: 1%; float: left;
        }
        .form-controle{
            width: 400px; height: 40px; border-radius: 5px; text-align: center;
        }
        .form-control{
            width: 100px; height: 40px; border-radius: 5px; text-align: center;
        }
        button{
            background-color: green; height: 40px; width: 150px; border-radius: 5px; margin-left: 5%;
        }
	</style>
  <title>Modificationt</title>
</head>
<body>
  <div class="cont">
    <table border="5px" class="scroll">
      <thead>
        <tr>
          <th>ID</th>
          <th>Question</th>
          <th>Type</th>
          <th>Réponse</th>
          <th>Nbpoint</th>
          <th>Modifier Question</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            $table = $dbconn->prepare("SELECT *FROM question");
            $table->execute();
            /* Fetch all of rows in the result set */
            $result = $table->fetchAll();

            foreach($result as $row){  ?>
             <tr id="<?php echo $row['id']; ?>">
              <td data-target="id"><?php echo $row['id']; ?></td>
              <td data-target="question"><?php echo $row['question']; ?></td>
              <td data-target="choix"><?php echo $row['typeQuestion']; ?></td>
              <td data-target="reponse"><?php echo $row['reponse']; ?></td>
              <td data-target="nbp"><?php echo $row['nbpoint']; ?></td>
              <td><a href="#" data-role="modifier" data-id="<?php echo $row['id']; ?>">Modifier</a></td>
             </tr>
          <?php  }
          ?>
      </tbody>
    </table>
  </div>

             <form action="" method="post" id="form">
              <div class="form-group">
                  <div class="fort">
                    <b>Question</b>
                    <input type="text" name="question" id="question" value="<?php echo $row['question']; ?>" class="form-controle">
                  </div>
                  <div class="fort">
                    <b>Type</b>
                    <input type="text" name="choix" id="choix" value="<?php echo $row['typeQuestion']; ?>" class="form-control">
                  </div>
                  <div class="fort">
                    <b>Reponse</b>
                    <input type="text" name="reponse" id="reponse" value="<?php echo $row['reponse']; ?>" class="form-control">
                  </div>
                  <div class="fort">
                    <b>Nbpoint</b>
                    <input type="text" name="nbp" id="nbp" value="<?php echo $row['nbpoint']; ?>" class="form-control">
                  </div>
                  <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" class="form-control">
                </div>
                <button type="submit">Modifier</button>
              </div>
             </form>
</body>
<script>
  $(document).ready(function(){
    $(document).on('click', 'a[data-role=modifier]',function(){
      var id = $(this).data('id');
      var question = $('#'+id).children('td[data-target=question]').text();
      var choix = $('#'+id).children('td[data-target=choix]').text();
      var reponse = $('#'+id).children('td[data-target=reponse]').text();
      var nbp = $('#'+id).children('td[data-target=nbp]').text();
      $('#question').val(question);
      $('#choix').val(choix);
      $('#reponse').val(reponse);
      $('#nbp').val(nbp);
      $('#id').val(id);

    });
      $('#form').submit(function(){
          question = $('#question').val();
          choix = $('#choix').val();
          reponse = $('#reponse').val();
          nbp = $('#nbp').val();
          id = $('#id').val();
          if(reponse=='' || nbp =='' || question =='' || choix ==''){
            alert('Remplissez tous les champs');
            return false;
          }else{
            $.post('php/Updatequestion.php', {question: question, choix: choix, reponse: reponse, nbp: nbp, id: id}, function(data){
                if(data == 'ok'){
                    $('#'+id).children('td[data-target=question]').text(question);
                    $('#'+id).children('td[data-target=choix]').text(choix);
                    $('#'+id).children('td[data-target=reponse]').text(reponse);
                    $('#'+id).children('td[data-target=nbp]').text(nbp);
                }
            });
          }
            return false;
      });
  });
</script>

</html>