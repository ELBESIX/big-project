<?php
#signup.php
require_once "config.php";

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$sql = "INSERT INTO livre (pseudo,message) VALUES(:pseudo,:message)";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("pseudo", $_POST['pseudo']);
$pre->bindParam("message", $_POST['message']);
$pre->execute();

//header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>