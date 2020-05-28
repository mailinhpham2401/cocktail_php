<?php
session_start();

$_SESSION['benutzername'] = $_POST['benutzername'];

include ('db_conncect.inc.php');

// Maskieren / sql injection
$_POST['benutzername'] = $db->real_escape_string($_POST['benutzername']);
$_POST['passwort'] = $db->real_escape_string($_POST['passwort']);

$qu = "select * from login where benutzername= '{$_POST['benutzername']}'";

$ret = $db->query($qu);

// prüft ob Nutzer existiert
if(!$ret)
{
    //Nutzer existiert nicht Meldung
    header("location: ../index.php?err=1");
    exit;
}

$arr = $ret->fetch_array();

// Stimmen Eingabe Passwort mit Passwort in DB überein?
if($arr['passwort'] == $_POST['passwort'])
{
    //passwörter stimmen überein
    $_SESSION['id'] = $arr['id'];
    header("location: ../cocktailliste.php?id={$arr['id']}");
}
else
{
    // passwörter stimmen nicht überein
    header("location: ../index.php?err=2");
    exit;
}

?>