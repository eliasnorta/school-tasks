<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Kertausta ja valmisfunktioita</title>
</head>
<body>

<?php

/**************
*  Tehtävä 1  *
**************/
echo "<h3>Tehtävä 1</h3>";

?>

<form action="kertaus_ja_valmisfunktiot.php" method="post">
<input type="text" name="luku1" size="5">
<select name="laskutoimitus">
<option value="1">+</option>
<option value="2">-</option>
<option value="3">*</option>
<option value="4">/</option>
</select>
<input type="text" name="luku2" size="5"><br>
<input type="submit" name="tehtava1">
</form>

<?php

if(isset($_POST["tehtava1"])) {
	$luku1 = $_POST["luku1"];
	$luku2 = $_POST["luku2"];
	$laskutoimitus = $_POST["laskutoimitus"];	// 1 = yhteenlasku, 2 = vähennyslasku, 3 = kertolasku, 4 = jakolasku
	
	// kirjoita koodisi tähän

	$yhtälö;

	switch ($laskutoimitus) {
		case '1':
			$yhtälö = $luku1 + $luku2;
			echo "{$luku1} + {$luku2} = {$yhtälö}";
            break;
		case '2':
			$yhtälö = $luku1 - $luku2;
			echo "{$luku1} - {$luku2} = {$yhtälö}";
			break;
		case '3':
			$yhtälö = $luku1 * $luku2;
			echo "{$luku1} * {$luku2} = {$yhtälö}";
			break;
		case '4':
			if ($luku1 == 0 or $luku2 == 0) {
				echo "Nollalla ei voi jakaa.";
				break;
			}
			$yhtälö = $luku1 / $luku2;
			echo "{$luku1} / {$luku2} = {$yhtälö}";
			break;
	}

}

/**************
*  Tehtävä 2  *
**************/
echo "<h3>Tehtävä 2</h3>";

// kirjoita koodisi tähän

for ($i=1; $i <= 10; $i++) { 
	if ($i == 10) {
		echo "{$i}";
		break;
	}
	echo "{$i} - ";
}

/**************
*  Tehtävä 3  *
**************/
echo "<h3>Tehtävä 3</h3>";

// kirjoita koodisi tähän

for ($i=1; $i <= 10; $i++) { 
	if ($i % 2) {
		echo "Luku {$i} on pariton.<br>";
	  } else {
		echo "Luku {$i} on parillinen.<br>";
	  }
}

/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

$lukutaulukko = array(6, 29, 10, 2, 8, 24, 17);

// kirjoita koodisi alle oleviin tulostuslauseisiin (ja tarvittaessa niiden väleihin)
echo "Taulukon pituus: ";
echo count($lukutaulukko);
echo "<br>";
echo "Taulukon arvot: ";
echo implode(', ', $lukutaulukko);
echo "<br>";
echo "Taulukon arvot pienimmästä suurimpaan: ";
sort($lukutaulukko);
$arrlength = count($lukutaulukko);
for($x = 0; $x < $arrlength; $x++) {
  echo "{$lukutaulukko[$x]} ";
}
echo "<br>";
echo "Taulukon arvot suurimmasta pienimpään: ";
rsort($lukutaulukko);
for($y = 0; $y < $arrlength; $y++) {
  echo "{$lukutaulukko[$y]} ";
}
echo "<br>";

/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="kertaus_ja_valmisfunktiot.php" method="post">
Anna merkkijono: <input type="text" name="merkkijono">
<input type="submit" name="tehtava5">
</form>

<?php

if(isset($_POST["tehtava5"])) {

	$merkkijono = $_POST["merkkijono"];
	
	// kirjoita koodisi alle oleviin tulostuslauseisiin
	echo "Merkkijono kokonaan pienillä kirjaimilla: <br>";
	echo strtolower("{$merkkijono}<br>");
	echo "Merkkijono kokonaan isoilla kirjaimilla: <br>";
	echo strtoupper("{$merkkijono}<br>");
	echo "Merkkijono lopusta alkuun: <br>";
	echo strrev($merkkijono);
	echo "<br>";
	echo "Merkkijonon pituus: <br>";
	echo strlen($merkkijono);
	echo "<br>";
	echo "Jokainen sana omalle rivilleen:<br>";
	$a = explode(" ", $merkkijono);
	
	foreach($a as $value){
		echo $value . "<br>";
	}

}

/**************
*  Tehtävä 6  *
**************/
echo "<h3>Tehtävä 6</h3>";
?>

<form action="kertaus_ja_valmisfunktiot.php" method="post">
Anna luvut (välilyönnillä erotettuina): <input type="text" name="lukujono">
<input type="submit" name="tehtava6">
</form>

<?php

if(isset($_POST["tehtava6"])) {
	
	$lukujono = $_POST["lukujono"];
	$lukutaulukko = explode(" ", $lukujono);
	
	// kirjoita koodisi tähän

	echo "Luvut: ";
	foreach($lukutaulukko as $value){
		echo "{$value} ";
	}
	echo "<br>";

	echo "Summa: ";
	foreach($lukutaulukko as $value2){
		$summa += $value2;
	}
	echo $summa;
	echo "<br>";

	echo "Keskiarvo: ";

	$average = array_sum($lukutaulukko)/count($lukutaulukko);
	echo $average;

	
}

?>

</body>
</html>