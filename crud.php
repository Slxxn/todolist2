<?php

    include("config.php");  

    if (isset($_GET["action"])){
         switch($_GET["action"]){

            case  "ajouter": 
             $maRequette="INSERT INTO `task` (`id`,`tache`,`etat`) VALUES (NULL,'".$_POST["tache"]."','n')";
             break;
            
            case "realiser":
             $maRequette= "UPDATE `task` SET `etat` = 'o' WHERE `task`.`id`=".$_GET["id"];
             break;

            case "supprimer":
             $maRequette="delete from task where id=".$_GET["id"];
             break;
         }
         if($mysqli->query($maRequette)){
            //je fais une redirection
              header('Location:'.$dir_ws); 
            }
    }else{

      //redirection par défaut

      header("location:  ".$dir_ws) ;
    }

?>