
<?php
//verification de $_GET["mod"]
    if(isset($_GET["mod"])){

        switch ($_GET["mod"]) {
            case "ajouter":
             include($dir_fs."pages/ajouter.php");
             break ;
            default:include($dir_fs."pages/acceuil.php");
            
            case "aide":
             include($dir_fs."pages/aide.php");  
             break ;  
            
            case "actu":
                include($dir_fs."pages/actu.php");  
               break ; 
        }


    } else{include($dir_fs."pages/acceuil.php");}

?>
