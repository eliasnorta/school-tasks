<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Istunnot</title>
</head>
<body>

<?php
session_start();
$id = session_id();

/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

// jotta lomake näkyisi oikein heti uloskirjautumisen jälkeen, tämän tehtävän vastauksen pitää olla tässä
// tee kuitenkin tehtävät järjestyksessä
?>
<!-- <p><a href="istunnot.php?ulos">Kirjaudu ulos</a></p> -->
<p><a href="logout.php">Kirjaudu ulos</a></p>

<?php

// kirjoita koodisi tähän


/********************
*  Tehtävät 1 + 2  *
********************/

echo "<h3>Tehtävät 1 ja 2</h3>";
 ?>

<form action="istunnot.php" method="post">
Käyttäjänimi: <input type="text" name="nimi"><br>
Avain: <input type="text" name="avain"><br>
<input type="submit" name="tehtava1">
</form>

<?php

if(isset($_POST["tehtava1"])) {
	$käyttäjänimi = $_POST["nimi"];
	$avain = $_POST["avain"];

    if ($avain == "php-ohjelmointi") {
        $_SESSION["ktunnus"] = $id;
        echo "Olet kirjautunut sisään: {$käyttäjänimi}<br>";
        echo "<style>
        form {
            display: none;
        }
        </style>";
    } else {
        echo "<br>Avain väärin!";
    }
}

/**************
*  Tehtävä 3  *
**************/
echo "<h3>Tehtävä 3</h3>";

// kirjoita koodisi tähän

echo session_id();

?>

</body>
</html>