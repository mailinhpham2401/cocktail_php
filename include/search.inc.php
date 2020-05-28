<?php

include ('db_conncect.inc.php');

function search($db)
{
        
    $output = '';

    // wenn Suchwort eingegeben
    if(isset($_POST['search']))
    {
        $searchq = $_POST['search'];

        $searchq = str_replace(" ", "_", $searchq);

        // alle Sonderzeichen werden gefiltert, nur die zahlen 0-9 und Buchstaben a-z (auch Großbuchstaben) sind erlaubt
        $searchq = preg_replace("#[^0-9a-z_]#i","",$searchq);

        // like %string% wählt alle texte aus mit string im namen, egal welche Stelle, Keyword Like
        $query = $db->query("select * from cocktails where name like '%$searchq%'") or die("Suche nicht möglich");
        // num_rows gibt anzahl der zeilen zurück, also hier Anzahl der gefundenen Cocktails
        $count = $query->num_rows;

        //wenn kein Cocktail gefunden
        if($count == 0 )
        {
            // erstellt button mit text nichts gefunden
            echo '
            <div class="dropdown">
                <button id="nichts" class="dropbtn">
                Nichts gefunden!
                </button>
            </div>
            ';
        }
        else
        {   
            // es wurden x Cocktails gefunden Button wird erstellt
            echo '
            <div class="dropdown">
                <button class="dropbtn">
                  '.$count.'  Cocktails gefunden!
                </button>
            <div class="dropdown-content">';

            // array mit den Cocktailnamen werden im while loop ausgelesen und jeweils ein <a> angehängt in $output gespeichert
            while($ret = $query->fetch_array())
            {
                $name    = $ret['name'];
                $output .= ' <a href="'.'detail_cocktail.php'.'?cocktail='.$name.'">'.str_replace("_", " ", $name).'</a>';
            }

            // Ausgabe der Liste
            echo $output;

            echo '
            </div>
            </div>
            ';
        }
    }

}

?>

