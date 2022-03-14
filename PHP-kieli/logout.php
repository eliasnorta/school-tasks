<?php
// echo "logout.php";

session_unset();

Session_destroy();

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>

<p><a href="istunnot.php">Back</a></p>
