<head><link rel="stylesheet" type="text/css" href="css/cocktailliste.css" /></head>
<ul>
<?php
include ('db_conncect.inc.php');

// liest aus dem Bilderordner die Datennamen aus
$image = scandir("./img/cocktails");

//Foreach läuft so oft durch wie es Bilder im Ordner gibt
foreach ($image as $datei) 
{
    // filtert . .. und _notes heraus
    if ($datei != "." && $datei != ".." && $datei != "_notes"):

        // .jpg wird aus dem String entfernt
        $pfad = str_replace(".jpg", " ",  $datei);

        // selektiere den cocktail aus datenbank
        $qu = "select * from cocktails where name = '$pfad'";
        $ret = $db->query($qu);
        $arr = $ret->fetch_array();
       
        // erstellt Bild/button für jeden cocktail      
?>
			<li onclick="location.href='detail_cocktail.php?cocktail=<?php echo $pfad;?>'">
				<img src="./img/cocktails/<?php echo $datei; ?>">
			</li>
<?php
    endif;
}
?>
</ul>

