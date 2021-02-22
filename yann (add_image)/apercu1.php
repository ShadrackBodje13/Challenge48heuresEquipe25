<?php
    
    if ( isset($_GET['id']) ){
        $id = intval ($_GET['id']);
        include ("connexion1.php");
        $req = "SELECT produits_id, produits_type, produits_blob " . 
               "FROM probuits WHERE produits_id = " . $id;
        $col = mysql_fetch_row ($ret);
        
        if ( !$col[0] ){
            echo "Id d'image inconnu";
        } else {
            header ("Content-type: " . $col[1]);
            echo $col[2];
        }

    } else {
        echo "Mauvais id d'image";
    }

?>
