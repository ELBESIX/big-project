<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "#";
$dbname = "big-project";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des valeurs du formulaire
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

// Enregistrement dans la base de données
$sql = "INSERT INTO livre (pseudo, message) VALUES ('$pseudo', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "Message enregistré avec succès";
} else {
    echo "Erreur d'enregistrement du message: " . mysqli_error($conn);
}


// Debug : vérification de la requête SQL
echo "Requête SQL : " . $sql . "<br>";

// Fermeture de la connexion à la base de données
mysqli_close($conn);

header("Location: index.php");
?>

