<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="css/livre.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <!--Header-->
    <header class="header">
        <h1>Livre d'or</h1>
        <img src="images/livre.jpg" alt="user profile">
    </header>

    <!--Main-->
    <main>
		<div class="container">
			<?php
			// Connexion à la base de données
			$host = "localhost";
			$user = "root";
			$password = "";
			$dbname = "big-project";

			$conn = mysqli_connect($host, $user, $password, $dbname);
			if (!$conn) {
				die("Connexion échouée: " . mysqli_connect_error());
			}

			// Récupération des messages depuis la base de données
			$sql = "SELECT * FROM livre ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);

			// Affichage des messages dans des containers séparés en deux parties
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<div class='card'>";
					echo "<div class='card-content'>";
					echo "<span class='card-title'>$row[pseudo]</span>";
					echo "<p>$row[message]</p>";
					echo "</div>";
					echo "</div>";
				}
			} else {
				echo "<p>Aucun message pour le moment.</p>";
			}

			// Fermeture de la connexion à la base de données
			mysqli_close($conn);
			?>
		</div>
	</main>

    <!--Import Materialize JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
