<?php
session_start();

include ('include/session.inc.php');
include ('include/db_conncect.inc.php');
include ('include/bestenliste.inc.php');

$cocktailName = str_replace("_", " ",  $_GET['cocktail']);

$qu = "select * from cocktails where name = '{$_GET['cocktail']}' ";
$ret = $db->query($qu);

$arr = $ret->fetch_array();

$zuatenArr = preg_split("/<br>/",$arr['zutaten']);

function zutatenListe($zuatenArr)
{
    $i = 0;
    while($i < count($zuatenArr))
    {
        echo "<li>";
        echo $zuatenArr[$i];
        echo "</li>";
        $i++;
    }
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
    <script src="js/main.js"></script>
    <title>Swimming Pool</title>
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

<!-- Search -->
	<div id="search">
		<input type="text" name="username" placeholder="Suchen ...">
	</div>

    <div id="container">
        <h1 class="uppercase">
            <?php
            echo $cocktailName;
            ?>
            </h1>
        <div>
        </div>
        <div>
            <img class="img_cocktail_detail" src="img/detail/<?php echo $_GET['cocktail']; ?>.jpg" alt="cocktail swimming pool">
        </div>
        <div id="zutaten" class="align_start">
            <h1>Zutaten</h1>
            <ul>
            
              <?php
            
                zutatenListe($zuatenArr);
              ?>
            </ul>
        </div>
        <?php  

        if(isset($_GET['btnPressed']))
        {
         addFav($db, $arr, $_GET['btnPressed']);
        }
        ?>

       
            <?php

                // select * from fusion where cocktailidAufDetailseite 
                
                if(benutzernameHasCocktail($db, $arr) == true )
                {
                echo " 
                    <form>
                        <button class=\"btn_cocktail_details\" onclick=\"location.href = 'detail_cocktail.php?btnPressed=true&cocktail=".$_GET['cocktail']."';\" type=\"button\">
                            <div>zur Bestenliste hinzufügen</div>
                            <div class=\"icon_cocktail_details\"></div>
                        </button>
                    </form>
                    ";
                }
                else if(isset($_SESSION['benutzername']))
                {
                    echo " 
                    <form>
                        <button class=\"btn_cocktail_details_added\" type=\"button\">
                            <div >Cocktail hinzugefügt!</div>
                            <div class=\"icon_cocktail_details_added\"></div>
                        </button>
                    </form>
                    ";
                }
                else
                {
                    echo " 
                    <form>
                        <button class=\"btn_cocktail_details_inactive\" onclick=\"location.href = 'index.php'\"; type=\"button\">
                            <div style=\"color:red\">Bitte melde dich an!</div>
                            <div class=\"icon_cocktail_details_inactive\"></div>
                        </button>
                    </form>
                    ";
                }
            ?>
        
        <div class="align_start">
            <h1>Zubereitung</h1>
            <p id="zubereitung">
                <?php
                echo $arr['zubereitung'];
                ?>
            </p>
        </div>
    </div>
</body>

</html>