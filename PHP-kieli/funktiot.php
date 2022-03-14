<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Funktiot</title>
<style>
.valkoinen {background-color: white; width: 30px; height: 30px;}
.musta {background-color: black; width: 30px; height: 30px;}

table, th, td {
	border: 1px solid #000;
}
</style>
</head>
<body>

<?php
/**************
*  Tehtävä 1  *
**************/
echo "<h3>Tehtävä 1</h3>";

function testiFunktio() {
	echo "<p>Tämä on testi.</p>";
}

function tulostaSumma($luku1, $luku2) {
	echo "<p>Lukujen $luku1 ja $luku2 summa on " . ($luku1 + $luku2) . ".</p>";
}

function koristeleTeksti($teksti) {
	return "~*~" . $teksti . "~*~";
}

// kirjoita koodisi tähän

testiFunktio();
tulostaSumma(2, 5);
echo koristeleTeksti("ohjelmointi");

/**************
*  Tehtävä 2  *
**************/
echo "<h3>Tehtävä 2</h3>";

// kirjoita koodisi tähän
// poista kommenttiviivat funktion kutsujen edestä, kun olet toteuttanut funktion

function tervehdi($nimi) {
	echo "<p>Hei, $nimi!</p>";
}

tervehdi("Pekka");
echo "<br>";
tervehdi("Leena");
echo "<br>";
tervehdi("opiskelija");
echo "<br>";


/**************
*  Tehtävä 3  *
**************/
echo "<h3>Tehtävä 3</h3>";

// kirjoita koodisi tähän
// poista kommenttiviivat funktion kutsujen edestä, kun olet toteuttanut funktion

function kerto($luku1, $luku2) {
	return $luku1 * $luku2;
}

echo "2 x 3 = " . kerto(2, 3) . "<br>";
echo "5 x 6 = " . kerto(5, 6) . "<br>";
echo "12 x 12 = " . kerto(12, 12) . "<br>";

/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

// kirjoita koodisi tähän
// poista kommenttiviivat funktion kutsun edestä, kun olet toteuttanut funktion

function shakkilauta ()
{
	echo "<table>";
	for($rivi = 0; $rivi < 8; $rivi++) {
		echo "<tr>";
		for($sarake = 0; $sarake < 8; $sarake++) {
			// tulosta parillisten rivien parilliset solut ja parittomien rivien parittomat solut valkoisiksi, muut mustiksi (if - elseif - else)
			if (($rivi + $sarake) % 2 == 0) {
				echo "<td class='valkoinen'>";
				echo "</td>";
			} else {
				echo "<td class='musta'>";
				echo "</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}

shakkilauta();

/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";

// kirjoita koodisi tähän
// poista kommenttiviivat funktion kutsujen edestä, kun olet toteuttanut funktion

function summaTaulukosta($taulukko) {
	$summa = array_sum($taulukko);
	return $summa;
}

$luvut = array(4, 9, 25, 30);
//echo array_sum($luvut);
echo "<p>Taulukon lukujen summa on " . summaTaulukosta($luvut) . "</p>";  // summan pitäisi olla 68

$luvut2 = array(2, 16, 19, 42);
echo "<p>Taulukon lukujen summa on " . summaTaulukosta($luvut2) . "</p>";  // summan pitäisi olla 79

/**************
*  Tehtävä 6  *
**************/
echo "<h3>Tehtävä 6</h3>";

// kirjoita koodisi tähän
// poista kommenttimerkit if-lauseiden ympäriltä, kun olet toteuttanut funktion

function arvoTaulukossa($taulukko, $arvo) {
	foreach ($taulukko as $taulu) {
		//if (in_array($arvo)) {
		//	return true;
		//} else {
		//	return false;
		//}
		if ($taulu == $arvo) {
			return true;
		} else {
			return false;
		}
	}
}

$luvut = array(4, 9, 25, 30);

if(arvoTaulukossa($luvut, 4)) {
	echo "<p>Luku 4 on taulukossa.</p>";
} else {
	echo "<p>Luku 4 ei ole taulukossa.</p>";
}

if(arvoTaulukossa($luvut, 10)) {
	echo "<p>Luku 10 on taulukossa.</p>";
} else {
	echo "<p>Luku 10 ei ole taulukossa.</p>";
}


?>

</body>
</html>