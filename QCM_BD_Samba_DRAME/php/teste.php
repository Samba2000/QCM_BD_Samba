<?php ob_start();
$table = $dbconn->prepare("SELECT *FROM question");
$table->execute();
/* Fetch all of rows in the result set */
$data = $table->fetchAll();

$nomb = $dbconn->prepare("SELECT *FROM nombre");
$nomb->execute();
/* Fetch all of rows in the result set */
$nombre = $nomb->fetchAll();

//On définit le nombre d'éléments à afficher par page
$nbreParPage=1;
//Cette variable détermine la taille du tableau 
$nbreElement=$nombre['nombre'];
//Cette variable détermine le nombre de pages.
//La fonction ceil arrondit le nombre à l'entier supérieur
$nbreDePage=ceil($nbreElement/$nbreParPage);
    if(isset($_GET['page'])) // Si la variable $PageEncour existe...
    {
    $PageEncour=intval($_GET['page']); 
    
        if($PageEncour>$nbreDePage) 
        // Si la valeur de $pagencour (le numéro de la page) est plus grande que $nbreDePage...
        {
        $PageEncour=$nbreDePage;
        }
    }
    else // Sinon
    {
        $PageEncour=1; // La page actuelle est la n°1    
    }
    $indiceDebut=($PageEncour-1)*$nbreParPage; 
    $indiceFin= $PageEncour*$nbreParPage-1;

    for ($i=$indiceDebut; $i <= $indiceFin; $i++) 
    { 
        if (array_key_exists($i, $data)) 
        {
            
            if($data[$i]['Choix']=='multiple')
						{
                            echo "<div style='font-size: 25px;font-weight: bold; text-align:center;'>Question ". $i.'/'.$nombre['nombre'].":<br>";
                            echo '<span style="">'.$data[$i]['Question'].'<br></span></div>';
                            echo "</div>";
                            echo "<div class='point'>".$data[$i]['Point']." pts </div>";
                            echo "<div class='affiche'>";
							foreach($data[$i]['Reponse'] as $value)
							{echo "<input type='checkbox' id='check' name='check[]' value='$value'>$value<br>";}
                            echo "</div>"; 
						}
						elseif($data[$i]['Choix']=='simple')
						{
                            echo "<div style='font-size: 25px;font-weight: bold; text-align:center;'>Question ". $i.'/'.$nombre['nombre'].":<br>";
                            echo '<span >'.$data[$i]['Question'].'<br></span></div>';
                            echo "</div>";
                            echo "<div class='point'>".$data[$i]['Point']." pts </div>";
                            echo "<div class='affiche'>";
							foreach($data[$i]['Reponse'] as $value)
							{
							echo "<input type='radio' id='radio' name='radio' value='$value'>$value<br>";
                            }
                            echo "</div>";   
						}
						elseif($data[$i]['Choix']=='texte')
						{
                            echo "<div style='font-size: 25px;font-weight: bold; text-align:center;'>Question ". $i.'/'.$nombre['nombre'].":<br>";
                            echo '<span style="">'.$data[$i]['Question'].'<br></span></div>';
                            echo "</div>";
                            echo "<div class='point'>".$data[$i]['Point']." pts </div>";
                            echo "<div class='affiche'>";
                        	echo '<input type="text" name="texte" id="texte" ><br>';
                            echo "</div>";
                        }
                        echo "</div>";
        }
    }      
?>
</form>
<?php 
ob_start();
if(!empty($_POST))
{
    for ($i=$indiceDebut; $i <= $indiceFin; $i++) 
    { 
        if (array_key_exists($i, $data)) 
        {
            if($data[$i]['Choix']=='simple')
            {
                foreach($data[$i]['ReponseCorrecte'] as $value)
                {
                    if($_POST['radio']==$value)
                    {
                    $_SESSION['scores']+=$data[$i]['Point'];
                    $_SESSION['trouvé']++;
                    }
                }
            }
            else if($data[$i]['Choix']=='texte')
            {
                foreach($data[$i]['ReponseCorrecte'] as $value)
                {
                    if($_POST['texte']==$value)
                    {
                    $_SESSION['scores']+=$data[$i]['Point'];
                    $_SESSION['trouvé']++;
                    }
                }
            }
            else if($data[$i]['Choix']=='multiple')
            {
                foreach($data[$i]['ReponseCorrecte'] as $value)
                {
                    foreach($_POST['check'] as $val)
                    {
                        if($val==$value)
                        {
                        $_SESSION['scores']+=$data[$i]['Point'];
                        $_SESSION['trouvé']++;
                        }
                    }
                }
            }   
        }    
      }
    }
  
ob_end_flush ();?>
</fieldset>