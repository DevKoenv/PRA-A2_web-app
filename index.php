<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
	<!-- Gebruik de header.php -->
	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<img class="imghome" src="img/draaibank.jpg" alt="Thumbnail foto" />
			<div class="center">
				<p>
					Ons bedrijf zit sinds 2015 in Noordhoek, daarvoor zaten wij ruim 13 jaar in Moerdijk. Na 20 jaar hebben wij al veel ervaring, dus kunnen wij u goed helpen. Wilt u meer weten over ons bedrijf? Klik dan op de knop hieronder.
				</p>
				<a class="btn" href="informatiepagina.php">Informatiepagina</a>
			</div>
		</div>
	</main>
	<!-- EINDE eigen code -->
	<!-- Gebruik de footer.php -->
	<?php require_once("footer.php"); ?>
</body>

</html>