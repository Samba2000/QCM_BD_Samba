<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="css/style2.css">
    <script type="text/javascript"> 
         function refresh(){
             var t = 1000; // rafraîchissement en millisecondes
             setTimeout('showDate()',t)
         }
         
         function showDate() {
             var date = new Date()
             var h = date.getHours();
             var m = date.getMinutes();
             var s = date.getSeconds();
             if( h < 10 ){ h = '0' + h; }
             if( m < 10 ){ m = '0' + m; }
             if( s < 10 ){ s = '0' + s; }
             var time = h + ':' + m + ':' + s
             document.getElementById('horloge').innerHTML = time;
             refresh();
          }
      </script>
</head>
<body onload=showDate();>
    <div class="header">
    <div class="logo "></div>
        <span style="background-color:#1C1C1C;color:silver;font-size:25px;"><?php $date = date('d/m/y'); echo $date; ?></span> <span id='horloge' style="background-color:#1C1C1C;color:silver;font-size:25px;"></span>
    <div class="header-text">Le Plaisir De Jouer</div>
    </div>
    <div class="content" id="content">

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>