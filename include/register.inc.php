<?php
include ('db_conncect.inc.php');

// query zum anlegen des Nutzers mit allen eingetragenen Daten
$qu = "Insert into login(benutzername, passwort, vorname, name, email ) values ('{$_POST['benutzername']}' , '{$_POST['passwort']}', '{$_POST['vorname']}' , '{$_POST['nachname']}' , '{$_POST['email']}');";

//suche Userdaten aus Tabelle Login
$ret = $db->query("Select * from login where benutzername='{$_POST['benutzername']}'");

$arr = $ret->fetch_array();

// prüft ob Benutzer bereits existiert
// wenn Tabelle leer -> benutzer existiert nicht
if(empty($arr))
{
    // Nutzer existiert nicht als kann er angelegt werden
    // prüft ob beide passwörter beim reg. übereinstimmen
    if($_POST['passwort'] == $_POST['passwort_repeat'])
    {
        // legt nutzer an
        $ret = $db->query($qu);
	if(!$ret) {
		$err = $db->error;
	}
	

        //liest angelegten User aus Datenbank
        $qu = "select * from login where benutzername = '{$_POST['benutzername']}' ";

        $ret = $db->query($qu);
        $arr = $ret->fetch_array();

        // prüft ob Benutzer anlegen erfolgreich
        if($_POST['benutzername'] == $arr['benutzername'])
        {
        // Benutzer wurde angelegt gehe zu register.php -> reg=true wird per get übergeben 
         header("location: ../register.php?reg=true");
        } else {
		echo $err ;
	}
    }
    else
    {
        // passwörter stimmen nicht überein, Fehler Nr.3 wird per get übergeben
        header("location: ../register.php?err=3");
        exit;
    }
}
else
{   
    // Nutzer existiert bereits, Fehler Nr.4 wird per get übergeben
    header("location: ../register.php?err=4");
    exit;
}

?>