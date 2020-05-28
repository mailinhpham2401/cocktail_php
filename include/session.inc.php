<?php

// erstellt logout Button und Zeigt eingeloggten user an
function session()
{
    if(isset($_SESSION['benutzername']))
    {
    echo '<span><a href="include/logout.inc.php" id="login_logout"><button type="button">Log out</button></a></span>'."<br>";
    echo "</div>";
}
}

?>

