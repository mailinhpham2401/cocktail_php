<?php

session_start();

include ('include/session.inc.php');
include ('include/db_conncect.inc.php');
include ('include/start_random.inc.php');

if(isset($_GET['err']))
{
    switch($_GET['err'])
    {
        case 1:
            echo "<SCRIPT>alert('Nutzer existiert nicht')</SCRIPT>";
            break;
        case 2:
            echo "<SCRIPT>alert('Passwort ist falsch')</SCRIPT>";
            break;
        default:;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="Cocktailseite" />
	<meta name="description" content="Aufgaben TIM 1" />
	<meta name="viewport" content="width=device-width, initial-scale= 1.0" />
	<title>Startseite</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>

<body> 	
<?php
    session();
    ?> 
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

			<div class="login">
			<form action="include/login.inc.php" method="POST">
				
				<div class="raw">
					<div class="col">
						<h3>Username</h3>
					</div>
					<div class="col">
						<input type="text" name="benutzername" placeholder="Username">
					</div>
				</div>
				<div class="raw">
					<div class="col">
						<h3>Password</h3>
					</div>
					<div class="col">
						<input type="password" name="passwort" placeholder="Password">
					</div>
				</div>
				<input id="btn_login" type="submit" name="btn_login" value="Login">
				<div class="raw">
					<div class="reg">
						New Member? <a href="register.php">registrieren</a>
					</div>
				</div>
			</div>
		</form>
			 

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
		<input type="text" name="search" placeholder="Suchen ...">
	</div>

	<!-- Welcome -->
	<div class="welcome">
		<h2>Herzlich willkommen zu unserer Cocktailseite</h2>
	</div>

	<div class="container">
	<div class="pic-wrapper">
			<ul>
				<li>
					<div class="pic">
						<?php 
                // erstellst zufalls Bild
                randomImg($cocktailName);
                ?>
					</div>
				</li>
				<li>
					<div class="zutat">
						<h1><?php
                    startName($cocktailName);
                    ?></h1>
			<div id="rezept">
						<ul>
					
                    <?php
                    // bindet Zutaten Text auf Startseite ein
                    zutatenListe($zuatenArr);
                    ?>

                    </ul>
					
				</li>
			</ul>
</div>
		</div>

	

               <!-- <img src="img/start/random_cocktail.png" alt="zufälliger Cocktail"> -->
            </div>
        </div>
       

		<div class="intro">
			
		<div id="date">
                <time>

                    <?php
                     echo date("d.m.Y");                     
                     ?>

                </time>
            </div>
           <hr size="5px" color="orange">
			<p>
				Das Wort „Cocktail“ entstand um 1800 im angelsächsischen Sprachraum, bezeichnete aber ursprünglich nur einen ganz bestimmten
				Typ unter den damals üblichen Mixgetränken. Die erste schriftliche Quelle definierte „cock tail“ 1806
				als „stimulierendes Getränk aus Spirituosen aller Art, Zucker, Wasser und Bitters“.[1] Ein „Cocktail“
				war also lediglich eine mit Kräuterbitter gewürzte Variante des damals verbreiteten Sling, was ungefähr
				dem heutigen Old Fashioned entspricht. <span id="dotdotdot"></span>
			</p>

			<p id="hide" style="display: none;"> Schon bald entstanden weitere Abwandlungen, die ebenfalls „Cocktail“
				genannt wurden, und das Wort wurde zum Gattungsbegriff, blieb aber im 19. Jahrhundert nur eine von vielen
				Drinkgruppen. In der ersten Hälfte des 20. Jahrhunderts wurde „Cocktail“ zunehmend zum Oberbegriff für
				fast alle alkoholischen Shortdrinks. Vor allem in Fachkreisen wird das Wort noch heute in diesem engen
				Sinn verstanden, also als Bezeichnung für meist stark alkoholische, ohne Eis im Stielglas servierte Shortdrinks
				und gleichsam als Abgrenzung insbesondere zu den größeren Longdrinks. Im allgemeinen Sprachgebrauch hat
				sich jedoch in der zweiten Hälfte des 20. Jahrhunderts ein weiterer Bedeutungswandel vollzogen: „Cocktail“
				wurde allmählich zu einer Sammelbezeichnung für fast jedes alkoholische Mixgetränk und teilweise auch
				für alkoholfreie Mischungen. In diesem Artikel und allgemein in der deutschsprachigen Wikipedia wird
				das Wort „Cocktail“ überwiegend in diesem weiten Sinn verwendet.</p>

			
            <div onclick="show(this)">...</div>
        </div>
		</div>

	</div>
	
	<script src="js/main.js"></script>

</body>

</html>
