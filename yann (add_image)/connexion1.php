<?php 

$servername = "127.0.0.1"; /*adresse IP du serveur*/
$username = "JIC"; /*Nom d'utilisateur*/
$password = " ";
$dbname = "48hynov"; /*Nom de la base de donnée*/



//$db_connect= new PDO("mysql:host=$servername;dbname=$dbname,$username,$password");

$ret = new PDO("mysql:host=localhost;dbname=48hynov", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

$ret->query("use 48hynov");


?>