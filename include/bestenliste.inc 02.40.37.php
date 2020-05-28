<?php

include ('db_conncect.inc.php');

//legt Favoriten Cocktail in der Datenbank an
function addFav($db,$cocktailid,$btnPressed)
{
    // wenn user eingeloggt
    if(isset($_SESSION['id']))
    {
        // wenn button gedrückt wurde
        if($btnPressed = true)
        {
            //$cocktailID enthält alle infos über den Cocktail z.b. Name, ID, Zutaten etc.
            // Liest alle Cocktails aus die User als Favs hat
            $qu = "SELECT * FROM logincocktails where cocktailid = {$cocktailid['id']} and loginid = {$_SESSION['id']}; ";
            $ret = $db->query($qu);
            $arr = $ret->fetch_array();

            // prüfen hat user mit id den cocktail schon in favs, wenn nicht vorhanden erstelle cocktail 
            if(!($cocktailid['id'] == $arr['cocktailid']))
            {
                $qu = "INSERT INTO `logincocktails` (`id`, `loginid`, `cocktailid`) VALUES (NULL, '{$_SESSION['id']}', {$cocktailid['id']});";
                $ret = $db->query($qu);
                //cocktail wird angelegt
            }   
        }
    }
}

// function die prüft ob Benutzer den Cocktail in seiner Favoriten Liste hat
function benutzernameHasCocktail($db,$cocktailid)
{
    //$cocktailID enthält alle infos über den Cocktail z.b. Name, ID, Zutaten etc.

    if(isset($_SESSION['id']))
    {
        $qu = "SELECT * FROM logincocktails where cocktailid = {$cocktailid['id']} and loginid = {$_SESSION['id']}; ";
        $ret = $db->query($qu);
        $arr = $ret->fetch_array();
        
        // prüfen hat user mit id den cocktail schon in favs 
        if(!($cocktailid['id'] == $arr['cocktailid']))
        {
        return true;
        }   
        else
        {
            return false;
        }      
    }

    return false;
}

// erstellt Favoritenliste
function createFavList($db)
{
    // ist nutzer eingeloggt?
    if(isset($_SESSION['id']))
    {
        //query sucht cocktail namen und cocktail ids raus für den eingeloggten benutzer, also sucht alle cocktails aus favliste
        $qu = "select cocktails.id, cocktails.name, logincocktails.loginid from (cocktails join logincocktails on (cocktails.id = logincocktails.cocktailid)) where LoginID = {$_SESSION['id']}";

        $ret = $db->query($qu);
    }

    // Tabelle wird Zeileweise ausgelesen und ins Array gespeichert
    while ($arr = $ret->fetch_array()) {
        
        $arr_replace = str_replace("_", " ",  $arr['name']);

        echo '
        <div class="list_item">
            <a href="detail_cocktail.php?cocktail='.$arr['name'].'"><img class="img_bestenliste" src="img/bestenliste/'.$arr['name'].'.jpg" alt=""></a>
            <div class="info_text">
                <span>
                '.$arr_replace.'
                </span>
                <a href="bestenliste.php?cocktail='.$arr['id'].'"><i class="far fa-times-circle fa-2x"></i></a>
            </div>
        </div>
        ';
    }
}

?>
