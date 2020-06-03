<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
   .input1{
    width:280px;
    height:50px;
    padding:5px;
    margin:50px 0 10px;
    border-radius:5px;
    border:4px solid #acbfa5
	}
	.inputs{
    width:150px;
    height:40px;
    background-color: #00BFFF;
    border-radius:5px;
    border:2px solid #00BFFF;
    color:#fff;
	}
	.t{
        border: 2px solid white;
    background-color: silver;
    width:400px;
    height:50px;
    margin: -10px;
    border-radius:5px;
    border:4px solid #acbfa5"
    }
    .samba{
        width:400px;
        float:left;
    }
    .te{
        background-color: silver;
        width:400px;
        height:50px;
        border-radius:5px;
        border:4px solid #acbfa5"
    }
    .lab
    {
        font-size: 25px;
     font-weight: bold;
    }
    .tes
    {
        background-color: silver;
        width:200px;
        height:40px;
        border-radius:5px;
        border:4px solid #acbfa5"
    }
    span
    {
        font-size: 25px;
        font-weight: bold;
        margin-left:25%;
    }
    .form{
        margin-left: 10%;
        height: 350px;
    }
    h3{
        font-size: 22px;
    }
</style>
</head>
<body>
<form action="" id="mainform" method="POST" name="mainform" class="form">
<h3><i>PARAMETRER VOTRE QUESTION</i></h3>
	<div style=" float: left; margin-right:5%;"><h2>Question</h2></div>
	<textarea name="question" rows="2" cols="60" class="t" id="question" required><?php  echo @$_POST['question'];?></textarea><span id="error1" ></span>
	<div><h3>Nbre de Points</h3></div>
	<div style="margin-left: 25%; margin-top: -18%;">
    <input type="number" name="nbp" id="nbp" style=" width: 15%;background-color: silver;border: 2px solid white" class="input1" required><br></div>
    <span id="error2" ></span>
    <div  style=" margin-top: -5%"> 
	<h3>Type de réponse</h3>
    <div  style="margin-left:25%; margin-top: -8%">  
    <select name="choix"  id="weather" style="width:200px; height:40px; background-color:silver" onclick="choix(this.value)" required >
    <option value="">Donnez le type de réponse</option>
    <option value="multiple">choix mutiple</option>
    <option value="simple">choix simple</option>
    <option value="texte">choix texte</option>
    </select>
    <div style=" float:right; margin-right:48%;">
    <img src="image/ic-ajout-réponse.PNG" alt="image" onclick="Add()"></div>
    </div>
    <span id="error3" ></span>
    </div>
    <div>
    <div id="inputs" class="samba">
    </div>
    <div style="float: right; margin-right:2%; margin-top: 12%;">
        <input type="submit" class="inputs" id="button_envoi" value="Enregistrer" name="valider">
    </div>
</form>
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
            <input type="text" class="te" name="reponse" required>
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
            <input type="text" class="tes" name="reponse[]" required>
            <input type="radio" value="${nbsam-1}" name="rep1[]" required>
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
            <input type="text" class="tes" name="reponse[]" required>
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



</fieldset>
</body>
</html>