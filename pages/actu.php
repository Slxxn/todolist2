<br><h1 class="mt-5">Actualitées</h1><br>


<?php
$resultQueryActu = $mysqli->query("SELECT * FROM actu ORDER BY id ASC");
?>
<ul class="list-group">

    <?php
    foreach($resultQueryActu as $rowActu){
    ?>

    <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
     <small class="opacity-50 text-nowrap"></small>
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>

             <h6 class="mb-0"><?php echo $rowActu["id"] ?> - <?php echo $rowActu["title"]; ?> </h6>
             <p class="mb-0 opacity-75"><?php echo $rowActu["dateins"] ?></p>

            </div>
        </div>

            <?php 

            
            $linkDetail=$dir_ws."module.php?action=realiser&id=".$rowActu["id"];
            ?>

        <a href="<?php echo $linkDetail ?>" type="button" class="btn btn-outline-success"> Détails +</a>

            <?php 
            }
           
            ?>

        <a href="<?php echo $linkSupprimer ?>" type="button" class="btn btn-outline-danger">Supprimer</a>

    </li>


</ul>
