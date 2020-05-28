<?php

    header('Content-Type: text/html; charset=utf-8');

    $db_host = "";
    $db_user = "nana";
    $db_password = "1234";
    $db_database = "cocktaildb1";

    $db = new mysqli($db_host,$db_user,$db_password,$db_database);

    if($db->connect_errno)
    {
        echo "Fehler".$db->connect_errno." ".$db->connect_error;
        exit;
    }
    else
    {
       // echo "Zugriff erfolgreich";
    }

    // Utf8 Charset
    mysqli_set_charset($db, 'utf8');

?>
