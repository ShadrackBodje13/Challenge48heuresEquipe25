<?php
session_start();
//require connexion à la base de données 
require_once('../inc/connectbdd.inc.php'); 
?>

<?php include("../inc/header.inc.php"); 
//on met notre header 

//Requete php pour lier base ded donner et poster au travers de notre base de données image.sql

if(isset($_SESSION['id_image'/*ou 'submit'*/])) {//en fonction de l'id_image
    $bdd = new PDO("mysql:host=127.0.0.1;dbname=image;charset =utf8", "root", "");

    if(isset($_POST['//nom du formulaire'])) {
        //Pour chaque attribut de la base de données dans le formulaire tu ajoutes au fur et à mesure tous en methode post
        $nom_image = htmlspecialchars($_POST['nom_image']);//Ce qui vient apres le post est ce qui est dans le formulaire, en d'autre terme $variable = (_$Post['son representant])
        $type_image = htmlspecialchars($_POST['type_image']);
        //Tu fais de meme pour tous les autres
        //if nom image pas vide et type image pas vide alors on les met dans la base de donnée
        if(!empty($_POST['nom_image']) AND !empty($_POST['type_image']) AND !empty($_POST['blabla']) /*tu ajoutes tous les trucs de la base de donnée...*/){
            $req = $bdd->prepare("INSERT INTO image(nom_image, type_image,/* et le reste*/) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $req->execute(array($nom_image, $type_image,/*et le reste*/));
        }
    }

?>

<head>
    <!-- Title Page-->
    <title>Déposer image en base donnée</title>

</head>

<form class="ins3" method="POST">
    <div>
        <div class="box3">
            <h2 class="text">Rentrer image</h2>    
            <div class="form-group">
              <label for="exampleInputName1">Nom Image</label>
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="nom_image" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Type Image</label>
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="type_image" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Photo avec Produit</label><!--Ici tu fais un input type select pour qu'on puisse faire un choix entre oui ou non-->
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="photo_avec_produit" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Photo avec humain</label><!--Ici tu fais un input type select pour qu'on puisse faire un choix entre oui ou non-->
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="photo_avec_humain" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Photo Institutionnaellet</label><!--Ici tu fais un input type select pour qu'on puisse faire un choix entre oui ou non-->
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="photo_instiutionnelle" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Credit photo</label>
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="credit_photo" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Format</label>
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="format" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Tags</label>
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="tags" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">copyright</label>
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="copyright" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">date_fin_droit</label><!--type date-->
              <input type="date" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="date_fin_droit" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Droit utilisation limitée </label><!--Ici tu fais un input type select pour qu'on puisse faire un choix entre oui ou non-->
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="droit_utilisation_limitee" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Chemin image</label><!--Il faut qu'on créé un nouveau attribut dans la base de donnée pour ajouter un chemin image-->
              <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="prix" value="">
            </div>
            
            <input type="submit" class="left btn btn-primary" name="formannonce" value="Ajouter une annonce">
            <?php
            }
            ?>
        </div>
    </div>
</form>

</body>