<?php error_reporting(E_ALL ^ E_NOTICE);?>
<!DOCTYPE html>
<html>
<head>
	<title>Autohaku</title>
</head>
<body>
	<h4>Syötä rekisterinumero:</h4>
	<form action="" method="post">
		<input type="text" name="rekisterinro" /><br><br>
		<input type="submit" name="hae" /><br><br>
	</form>
	<!-- ?
	<form action="" method="post">
		<input type="text" name="search" /><br><br>
		<input type="submit" name="Search" /><br><br>
	</form>
	-->


<?php
	$palvelin = "localhost";
	$kayttaja = "root";
	$salasana = "";
	$tietokanta = "autot";
	
	// luo yhteys
	$yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);
	
	// jos yhteyden muodostaminen ei onnistunut, keskeytä ja näytä virheilmoitus
	if ($yhteys->connect_error) {
	   die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
	}
	// aseta merkistökoodaus (muuten ääkköset sekoavat)
	$yhteys->set_charset("utf8");


	$rekisterinimi = $yhteys->real_escape_string(strip_tags($_POST['rekisterinro']));
	$hakusql = "SELECT * FROM Auto WHERE rekisterinro LIKE '%$rekisterinimi%'";
	//$hakusql = "SELECT * FROM autot;

	// suorita kysely ja sijoita palautetut rivit $tulokset-muuttujaan
	$tulokset = $yhteys->query($hakusql);
	//$tulokset = $yhteys->mysql_query($hakusql);


	if ($tulokset) {
		// jos tulosrivejä löytyi
		if ($tulokset->num_rows > 0) {
		// hae joka silmukan kierroksella uusi rivi - silmukka päättyy, kun rivit loppuvat
		while($rivi = $tulokset->fetch_assoc()) {
			// taulukon avaimet (hakasuluissa olevat nimet) ovat TIETOKANNAN KENTTIÄ (sarakkeita)
			echo "Tuotenumero: " . $rivi["rekisterinro"] . "<br>";
			echo "Nimi: " . $rivi["vari"] . "<br>";
			echo "Hinta: " . $rivi["vuosimalli"] . "<br>";
			echo "Hinta: " . $rivi["omistaja"] . "<br>";
		}
		} else {
		echo "Ei tuloksia";
		}
	}

$yhteys->close();

?>
	</body>
</html>
