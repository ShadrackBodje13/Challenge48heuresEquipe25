<?php
require_once "connectbdd.inc.php";

    if(isset($_POST['submit'])){
        $nom_image = htmlspecialchars($_POST['nom_image']);
        $type_image = htmlspecialchars($_POST['type_image']);
        $photo_avec_produit = htmlspecialchars($_POST['photo_avec_produit']);
        $photo_avec_humain = htmlspecialchars($_POST['photo_avec_humain']);
        $photo_institutionelle = htmlspecialchars($_POST['photo_industrielle']);
        $format = htmlspecialchars($_POST['format']);
        $credit_photo = htmlspecialchars($_POST['credit_photo']);
        $droit_utilisation_limitee = htmlspecialchars($_POST['droit_utilisation_limitee']);
        $copyrights = htmlspecialchars($_POST['copyrights']);
        $date_fin_droit = htmlspecialchars($_POST['date_fin_droit']);
        $tags = htmlspecialchars($_POST['tags']);
    

//  $name = "";
// if (!empty($_FILES)) {
//     foreach ($_FILES["img"]["error"]as $key => $error){
//     if ($error == UPLOAD_ERR_OK) {
//         $tmp_name = $_FILES["img"]["tmp_name"][$key];
//         $name = basename($_FILES["img"]["name"][$key]);
//         move_uploaded_file($tmp_name, "img/$name");
//     }
//   }
// } 

$requesteSQL = $pdo->prepare("INSERT INTO produit (nom_image, type_image, photo_avec_produit, photo_avec_humain, photo_industrielle, format, credit_photo, droit_utilisation_limitee, copyrights, date_fin_droit, tags) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$requesteSQL -> execute(array($type, $photo_avec_produit, $photo_avec_humain, $photo_institutionelle, $format, $credit_photo, $droit_utilisation_limitee, $copyrights, $date_fin_droit, $tags));
echo "Image ajouter";
}
?>