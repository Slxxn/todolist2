<?php
        //requete de lecture

 $resultQueryAide = $mysqli->query("SELECT * FROM aide ORDER BY id ASC");

 // je test si il ya des resultats 
 // si il y a resultat je fais ma boucle
    if ($resultQueryAide->num_rows<1 ) {?>

      <h2>Vous n'avez aucune tache. Merci d'ajouter une tache ci dessous</h2>
    
        <?php
        //sinon j'informe l'utilisateur
    }else{   
           
        foreach($resultQueryAide as $row_Aide){?>

            <h2> <?php echo $row_Aide["id"] ;  ?> </h2> 
            <?php      
        }
       
        

        
    } 
    // endif






?>