<?php

session_start();

include ('include/db_conncect.inc.php');
include ('include/session.inc.php');
include ('include/bestenliste.inc.php');

if(isset($_SESSION['id']) && isset($_GET['cocktail']))
{
$qu_delete = "DELETE FROM logincocktails WHERE loginid = {$_SESSION['id']} and cocktailid = {$_GET['cocktail']}";
}

if(isset($qu_delete))
{
$db->query($qu_delete);
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="Cocktailseite" />
	<meta name="description" content="Aufgaben TIM 1" />
	<meta name="viewport" content="width=device-width, initial-scale= 1.0" />
	<title>Cocktailliste</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/cocktailliste.css" />
	<link rel="stylesheet" type="text/css" href="css/bestenliste.css" />
</head>

<body>
	<!-- Banner -->
	<div class="banner">

		<!-- Banner Left -->
		<div class="ban-left">

		</div>

		<!-- Banner Right -->
		<div class="ban-right">

			<div class="name">
				<h1>Midnight</h1>
			</div>

		</div>

		<!-- Navbar -->
		<div id="nav" class="nav">
			<input type="checkbox" id="nav-check">
			<div class="nav-header">
				<div class="nav-title">

				</div>
			</div>
			<div class="nav-btn">
				<label for="nav-check">
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>

			<div class="nav-links">
				<a href="index.php">Home</a>
				<a href="cocktailliste.php">Cocktailliste</a>
				<a href="zutaten.php">Zutaten</a>
				<a href="bestenliste.php">Bestenliste</a>
				<a href="impressum.php">Impressum</a>
				<a href="#search" onclick="toggleSearch()">Suche</a>
			</div>
		</div>
	</div>


	<!-- Search -->
	<div id="search">
		<input type="text" name="username" placeholder="Suchen ...">
	</div>

	<!-- Welcome -->
	<div class="welcome">
		<h2>Wählen Sie Ihre Cocktail!</h2>
	</div>

	<div id="wrapper_main_bestenliste">
            
            <?php
            
            if(isset($_SESSION['id']))
            {
                // bestenlist.inc.php
                createFavList($db);
            }
            ?>
        </div>

	<script src="js/main.js"></script>

</body>

</html>
