<<?php

require_once('./fonctions/template.fonctions.php');

?>

<!doctype html>
	<html lang="fr">
	<head>
		<title>Labo 2 : La Médiathèque</title> <!--OBLIGATOIRE-->
		<meta charset="utf-8" /> <!-- L'alphabet utilisé sur notre site-->
		<script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/normalize.css">
		<link rel="stylesheet" type="text/css" href="styles/moncss.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
    		<h1>La médiathèque</h1>
    		<form method="POST" action="mediatheque.php">
    			<input type="text" name="Recherche" id="RechercheId" placeholder="Entrez votre recherche"/>
    			<button type="submit" name="RechercheIcon" value="" title="RechercheIcon"><img src="./images/icons/search2.png" width= "14px"alt="" /></button>
    		</form>
		</header>

		<?php 
			echo Navigation();
		?>

		<div class="Film">
			<table>
				<tr>
					<th rowspan="3"><img src="./images/affiches/300.jpg" width="200px"></th>
					<th class="left">Titre</th>
					<th class="right">Date de Realisation</th>
				</tr>
				<tr>
					<th colspan="2">Information</th>
				</tr>
				<tr>
					<th colspan="2">
						What is Lorem Ipsum?
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</th>
				</tr>
			</table>
		</div>
	</body>
	</html>