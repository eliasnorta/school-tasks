<?php 
if (!isset($_SESSION["ktunnus"])) {
    header("Location: istunnot.php");
    die();
} else {
    echo "<br>olet kirjautunut";
}

?>