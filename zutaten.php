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
		<h2>Unseren Zutaten</h2>
	</div>

	<div class="container">

		<ul>
			<li>
				<img src="img/zutaten/ananas.jpg" alt="Ananas" />
				<h1>Ananas</h1>
			</li>
			<li>
				<img src="img/zutaten/coconut.jpg" alt="Coconut" />
				<h1>Coconut</h1>
			</li>
			<li>
				<img src="img/zutaten/eis.jpg" alt="Eis" />
				<h1>Eis</h1>
			</li>
			<li>
				<img src="img/zutaten/grenadine.jpg" alt="Grenadine" />
				<h1>Grenadine</h1>
			</li>
			<li>
				<img src="img/zutaten/orangen_saft.jpg" alt="Orangensaft" />
				<h1>Orangensaft</h1>
			</li>
			<li>
				<img src="img/zutaten/rum.jpg" alt="Rum" />
				<h1>Rum</h1>
			</li>
			<li>
				<img src="img/zutaten/sahne.jpg" alt="Schlagsahne" />
				<h1>Schlagsahne</h1>
			</li>
			<li>
				<img src="img/zutaten/vodka.jpg" alt="Vodka" />
				<h1>Vodka</h1>
			</li>
			<li>
				<img src="img/zutaten/zitronen_saft.jpg" alt="Zitronensaft" />
				<h1>Zitronensaft</h1>
			</li>
			<li>
				<img src="img/zutaten/zucker.jpg" alt="Zucker" />
				<h1>Zucker</h1>
			</li>
		</ul>

	</div>

	<script src="js/main.js"></script>

</body>

</html>
