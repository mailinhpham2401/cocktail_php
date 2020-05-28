<?php

session_start();

include ('include/session.inc.php');

if(isset($_GET['err']))
{
    switch($_GET['err'])
    {
        case 3:
            echo '<script>alert("passwörter Stimmen nicht überein");</script>';
            break;
        case 4:
            echo "<script>alert('Nutzer existiert bereits');</script>";
            break;
        default:;
    }
}

if(isset($_GET['reg']) && ($_GET['reg'] == true))
{
    echo "<script>alert('Nutzer wurde angelegt');</script>";
}

?>

<!DOCTYPE html>
<html lang="de">

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
    <?php
    session();
    ?>  

 <header>
      
        <div class="nav-links">
				<a href="index.php">Home</a>
				<a href="cocktailliste.php">Cocktailliste</a>
				<a href="zutaten.php">Zutaten</a>
				<a href="bestenliste.php">Bestenliste</a>
				<a href="impressum.php">Impressum</a>
				<a href="#search" onclick="toggleSearch()">Suche</a>
			</div>
    </header>

<form action="include/register.inc.php" id="register" method="POST">
    <h1>Konto eröffnen</h1>
    <input type="text" name="benutzername" placeholder="Benutzername *" required>
    <input type="passwort" name="passwort" placeholder="Passwort *" required>
    <input type="passwort" name="passwort_repeat" placeholder="Passwort wiederholen *" required>
    <input type="text" name="vorname" placeholder="Vorname *" required>
    <input type="text" name="nachname" placeholder="Nachname *" required>
    <input type="text" name="email" placeholder="E-mail *" required>
    <input type="submit" name="submit" id="send">
</form>
    
<script src="js/main.js"></script>
</body>
</html>