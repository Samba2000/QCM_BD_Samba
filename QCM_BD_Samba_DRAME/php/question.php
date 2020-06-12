<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea{
            border-radius: 5px; background-color: whitesmoke; float: left; 
        }
        .form-control{
            margin-bottom: 2%;
        }
        .conte{
            width: 100%; 
        }
        b{
            margin-left: 5%; margin-right: 2%; float: left; font-size: 30px; margin-top: 1%;
        }
        i{
            font-size: 30px; font-weight: bold; margin-left: 15%;
        }
        select{
            width:200px; height:40px; background-color:silver; 
        }
        .number{
            width:100px; height:50px; background-color:silver; border-radius: 5px; 
        }
        .inputs{
            width:150px; height:40px; background-color:green; float: right;
        }
        .te{
         background-color: silver; width:200px; height:40px; border-radius:5px; border:4px solid #acbfa5"
        }
        .question{
            width:350px; height:50px; background-color:silver; border-radius: 10px; 
        }
    </style>
</head>
<body>
<form action="" id="form" method="POST" name="mainform" class="forms">
    <div class="conte">
        <i>PARAMETRER VOTRE QUESTION</i>
        <div class="form-contorl">
            <b>Question</b>
            <input name="question" class="question" id="question" placeholder="Question"><span id="error1" style="color: red;"></span>
        </div>
        <div class="form-control">
            <b>Nbre de Points</b>
            <input type="number" name="nbp" id="nbp" class="number" placeholder="Number">
            <span id="error2" style="color: red;"></span>
        </div>
        <b>ID_USER</b><input type="number" name="id" id="nbp" placeholder="id_user" class="number">
        <div class="form-control"> 
            <b>Type de réponse</b>  
            <select name="choix" id="weather" onclick="choix(this.value)">
            <option value="">Donnez le type de réponse</option>
            <option value="multiple">choix mutiple</option>
            <option value="simple">choix simple</option>
            <option value="texte">choix texte</option>
            </select>
            <span id="error3" ></span>
            <img src="image/ic-ajout-réponse.PNG" alt="image" onclick="Add()">
        </div>
        <div id="inputs" class="samba">
        </div>
        <button type="submit" class="inputs">Enregistrer</button>
    </div>
</form>

<script>
      $(function() {
        $("#erro1").hide();
        $("#error2").hide();
        $("#error3").hide();

        $("#question").focusout(function(){

            check_question();

        });
        $("#nbp").focusout(function(){

            check_nbp();

        });

        function check_question(){
          var question_length = $("#question").val().length;
          if($("#question").val() == ''){
            $("#error1").html('Veuillez entrer votre question');
            $("#error1").show();
          }
          else if(!$("#question").val().match(/^[A-Z]{1}[a-z]+$/)){
            $("#error1").html('Votre question doit commencé par un majuscule');
            $("#error1").show();
          }
          else if(question_length < 2 || question_length > 50){
            $("#error1").html('La question doit etre compris entre 2 et 50 caratères');
            $("#error1").show();
          }
          else{
            $("#error1").hide();
            $("#question").css("border-color", "green");
          }
        }

        function check_nbp(){
          var nbp_length = $("#nbp").val().length;
          var nbp = $('#nbp').val();
          if($("#nbp").val() == ''){
            $("#error2").html('Veuillez entrer le nombre de point');
            $("#error2").show();
          }
          else if(!$("#nbp").val().match(/^[0-9]+$/)){
            $("#error2").html('Votre nbp ne doit composé que des chiffres');
            $("#error2").show();
          }
          else if(nbp < 1){
            $("#error2").html('Le nbp doit etre supérieur ou égal à 1');
            $("#error2").show();
          }
          else{
            $("#error2").hide();
            $("#nbp").css("border-color", "green");
          }
        }

        $('#form').submit(function(){
            question = $(this).find('input[name=question]').val();
            nbp = $(this).find('input[name=nbp]').val();
            choix = $(this).find('select[name=choix]').val();
            reponse = $(this).find('input[name=reponse]').val();
            id = $(this).find('input[name=id]').val();
            if(question=='' || nbp=='' || choix=='' || reponse=='' || id==''){
            alert('Remplissez tous les champs');
            return false;
          }else{
                $.post('php/verifierquestion.php', {question: question, nbp: nbp, choix: choix, reponse: reponse, id: id}, function(data){
                    if(data == 'ok'){
                        alert('Question enregistrée');
                    }else{
                        alert('Question non enregistrée');
                    }
                });
                return false;
          }
        });
      });
    </script>
<script>
        var nbsam = 0;
        function onAddInput()
        {
            nbsam++; 
            var divInputs = document.getElementById('inputs');
            var newInput = document.createElement('div');
            newInput.setAttribute('class', "sam");
            newInput.setAttribute('id', "sam_"+nbsam);
            newInput.innerHTML = `
            <label class="lab">Reponse `+nbsam+` </label>
            <input type="text" class="te" name="reponse">
            <input type="hidden" value="type texte" name="type">
           <img src="image/ic-supprimer.PNG" onclick="onDeleteInput(${nbsam})">
            `;
        divInputs.appendChild(newInput);
        }


        var nbsam = 0;
        function onAddradio()
        {
            nbsam++;
            var divInputs = document.getElementById('inputs');
            var newInput = document.createElement('div');
            newInput.setAttribute('class', "sam");
            newInput.setAttribute('id', "sam_"+nbsam);
            newInput.innerHTML = `
            <label class="lab">Reponse `+nbsam+` </label>
            <input type="text" class="te" name="reponse" required>
            <input type="radio" value="${nbsam-1}" name="rep1[]">
            <input type="hidden" value="type radio" name="type">
           <img src="image/ic-supprimer.PNG" onclick="onDeleteInput(${nbsam})">
            `;
        divInputs.appendChild(newInput);
        }
        var nbsam=0
        function onAddcheckbox()
        {
            nbsam++;
            var divInputs = document.getElementById('inputs');
            var newInput = document.createElement('div');
            newInput.setAttribute('class', "sam");
            newInput.setAttribute('id', "sam_"+nbsam);
            newInput.innerHTML = `
            <label class="lab">Reponse `+nbsam+` </label>
            <input type="text" class="tes" name="reponse" required>
            <input type="checkbox" name="rep2[]" value="${nbsam-1}">
            <input type="hidden" value="type checkbox" name="type">
           <img src="image/ic-supprimer.PNG" onclick="onDeleteInput(${nbsam})">
            `;
        divInputs.appendChild(newInput);
        }
        function Add() {
    var select = document.getElementById('weather');
    if(select.value=='texte')
    {
        return onAddInput();
    }
    else if(select.value=='simple')
    {
        return onAddradio();
    }
    else if(select.value=='multiple')
    {
        return onAddcheckbox();
    }
    }
    function onDeleteInput(n)
    {
        var target = document.getElementById('sam_'+n);
            target.remove();
       FadeOut('sam_'+n);
    }

    function FadeOut(idTarget)
    {
        var target = document.getElementById(idTarget);
        var effect = setInterval(function(){
            if(!target.style.opacity)
            {
                target.style.opacity = 1;
            }
            if(target.style.opacity>0)
            {
                target.style.opacity-=0.1;
            }
            else
            {
                clearInterval(effect);
            }
        },200)
    }    
</script>
</body>
</html>