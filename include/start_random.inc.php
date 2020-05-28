<?php
header('Content-Type: text/html; charset=utf-8');

// funktion die Zufallsbild erstellt
function randomImg($randomName)
{
    echo '<img src="'."img/cocktails/".$randomName.'.jpg'.'">';
}

// Wenn der Cocktailname zu lang also >16 Zeichen dann breche ihn um
function startName($name)
{
    if(strlen($name) > 16)
    {
    // füge ein br ein wo es einen Unterstrich gibt
    $nameReplaced = str_replace("_", "<br>", $name);
    }
    else
    {
    // Name nicht zu lang füge Leerzeichen anstelle von Unterstrich ein
    $nameReplaced = str_replace("_", "&nbsp;", $name);
    }
    // gibt den namen als headlinetag aus
    echo '<h1 class="upperase">'.$nameReplaced.'</h1>';
}

$qu = "select * from cocktails ";    
$ret = $db->query($qu);

// zählt wieviele Cocktails sich in der Datenbank - Tabelle Cocktails befinden
$anzahlCocktails = $ret->num_rows;

// generiert Zufallszahl zw. 1 und Anzahl der Cocktails
$randomNumber = rand(1, $anzahlCocktails );

// Wählt den Namen und Zutatenliste des zufällig gewählten Cocktails aus
$qu = "select name, zutaten from cocktails where id =".$randomNumber;
$ret = $db->query($qu);
$arr = $ret->fetch_array();

$cocktailName = $arr['name'];
$cocktailzutaten = $arr['zutaten'];

// Zutaten liste wird als array gespeichert, nach jedem <br> wird ein Eintrag im Array angelegt
$zuatenArr = preg_split("/<br>/",$cocktailzutaten);

// Zutaten Array wird in while schleife ausgelesen und als Liste ausgegeben
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