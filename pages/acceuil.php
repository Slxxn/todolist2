<br><h2 class="mt-5">Acceuil</h2><br>

<?php

/* Sélection de toutes les lignes */
$resultQueryTask = $mysqli->query("SELECT * FROM task ORDER BY id ASC");

// printf("Nombre de lignes affectées (SELECT): %d\n", $mysqli->affected_rows);

?>
<ul class="list-group">

    <?php
    foreach($resultQueryTask as $rowTask){
    ?>

    <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
     <small class="opacity-50 text-nowrap"></small>
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>

             <h6 class="mb-0"><?php echo $rowTask["id"] ?> - <?php echo $rowTask["tache"]; ?> </h6>
             <p class="mb-0 opacity-75"><?php echo $rowTask["dateins"] ?></p>

            </div>
        </div>

            <?php 
            if($rowTask["etat"] == "n"){
            $linkRealise=$dir_ws."crud.php?action=realiser&id=".$rowTask["id"];
            ?>

        <a href="<?php echo $linkRealise ?>" type="button" class="btn btn-outline-success">Réaliser</a>

            <?php 
            }
            if($rowTask["etat"] == "o"){
            $linkSupprimer=$dir_ws."crud.php?action=supprimer&id=".$rowTask["id"];
            ?>

        <a href="<?php echo $linkSupprimer ?>" type="button" class="btn btn-outline-danger">Supprimer</a>
        <?php
        }
        ?>
    </li>

    <?php
    }
    ?>

</ul>
