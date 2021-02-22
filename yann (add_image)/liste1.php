<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
      <?php
         include ("connexion1.php");
        $STH = $ret -> prepare("SELECT produits_nom, produits_id " .
                "FROM produits ORDER BY produits_nom");
         $STH -> execute ();
         $result = $STH -> fetch();
         echo $result ["figure"];

                
         /*while ( $col = mysql_fetch_row ($ret) )
         {
             echo "<a href=\"apercu1.php?id=" . $col[1] . "\">" . $col[0] . "</a><br />";
         }
         */
      ?>
   </body>
</html>