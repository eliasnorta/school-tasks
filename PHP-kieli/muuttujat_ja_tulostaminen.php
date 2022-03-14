<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Muuttujat ja tulostaminen</title>
</head>
<body>
<?php
/**************
*  Tehtävä 1  *
**************/

echo "<h3>Tehtävä 1</h3>";

// kirjoita koodisi tähän

$koulu = "Omniassa";
$tutkinto = "Tieto- ja viestintätekniikka";
$lkm = "24";

echo "<p>Opiskelen {$koulu}ssa.<br>Tutkintoni on $tutkinto.<br>Luokassani on $lkm opiskelijaa.</p>";

/************** 
*  Tehtävä 2  *
**************/

echo "<h3>Tehtävä 2</h3>";
?>

<form action="muuttujat_ja_tulostaminen.php" method="post">
Nimi: <input type="text" name="nimi">
<input type="submit" name="tehtava2">
</form>

<?php


if(isset($_POST["tehtava2"])) {

	$nimi = $_POST["nimi"];

	// kirjoita koodisi tähän

	echo "Hei, {$nimi}!";

}
/**************
*  Tehtävä 3  *
**************/
echo "<h3>Tehtävä 3</h3>";
?>

<form action="muuttujat_ja_tulostaminen.php" method="post">
Ensimmäinen luku: <input type="text" name="luku1"><br>
Toinen luku: <input type="text" name="luku2"><br>
<input type="submit" name="tehtava3">
</form>

<?php

if(isset($_POST["tehtava3"])) {

	$luku1 = $_POST["luku1"];
	$luku2 = $_POST["luku2"];

	// kirjoita koodisi tähän

	function summa($luku1, $luku2) {
		$summaluku = $luku1 + $luku2;
		echo "{$luku1} + {$luku2} = {$summaluku}<br/>";
	}
	function erotus($luku1, $luku2) {
		$erotusluku = $luku1 - $luku2;
		echo "{$luku1} - {$luku2} = {$erotusluku}<br/>";
	}
	function tulo($luku1, $luku2) {
		$tuloluku = $luku1 * $luku2;
		echo "{$luku1} * {$luku2} = {$tuloluku}<br/>";
	}
	function osamaara($luku1, $luku2) {
		$osamaaraluku = $luku1 / $luku2;
		echo "{$luku1} / {$luku2} = {$osamaaraluku}<br/>";
	}
	function prosentti($luku1, $luku2) {
		$prosentiluku = $luku1 % $luku2;
		echo "{$luku1} % {$luku2} = {$prosentiluku}";
	}

	summa($luku1, $luku2);
	erotus($luku1, $luku2);
	tulo($luku1, $luku2);
	osamaara($luku1, $luku2);
	prosentti($luku1, $luku2);

}

/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

// kirjoita koodisi tähän

$php = "PHP";
$java = "Java";
$perl = "Perl";
$jscript = "Javascript";

?>

<ul>
	<li><?= $php; ?></li>
	<li><?= $java; ?></li>
	<li><?= $perl; ?></li>
	<li><?= $jscript; ?></li>
</ul>

<?php

/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="muuttujat_ja_tulostaminen.php" method="post">
Anna luku: <input type="text" name="luku"><br>
<input type="submit" name="tehtava5">
</form>

<?php

if(isset($_POST["tehtava5"])) {

	$luku = $_POST["luku"];

	echo "Luku on $luku.<br>";
	// lisää 2
	$luku = $luku + 2;
	echo "Lisätty kaksi. Luku on $luku.<br>";
	// vähennä 4
	$luku = $luku - 4;
	echo "Vähennetty neljä. Luku on $luku.<br>";
	// kerro luvulla 5
	$luku = $luku * 5;
	echo "Kerrottu viidellä. Luku on $luku.<br>";
	// jaa luvulla 3
	$luku = $luku / 3;
	echo "Jaettu kolmella. Luku on $luku.<br>";
	// kasvata yhdellä (++ -operaattori)
	$luku = $luku ++;
	echo "Kasvatettu yhdellä. Luku on $luku.<br>";
	// vähennä yhdellä (-- -operaattori)
	$luku = $luku --;
	echo "Vähennetty yhdellä. Luku on $luku.<br>";

}
/**************
*  Tehtävä 6  *
**************/
echo "<h3>Tehtävä 6</h3>";

// kirjoita koodisi tähän

$luvut = array(2, 5, 7, 12);
array_push($luvut, 19);
foreach($luvut as $luvut){
	echo $luvut . "\n";
}

/**************
*  Tehtävä 7  *
**************/
echo "<h3>Tehtävä 7</h3>";
?>

<form action="muuttujat_ja_tulostaminen.php" method="post">
Kuinka mones luku korvataan? <input type="text" name="indeksi"><br>
Millä luvulla? <input type="text" name="uusi_luku"><br>
<input type="submit" name="tehtava7">
</form>

<?php

if(isset($_POST["tehtava7"])) {

	$monesko = $_POST["indeksi"];
	$uusi_luku = $_POST["uusi_luku"];
	
	$lukutaulukko = array(1,2,3,4,5,6,7,8,9,10);
	
	echo "Luvut alussa: " . join(" ", $lukutaulukko) . "<br>";
	// kirjoita koodisi tähän

	$uusi_luku = array($monesko => $uusi_luku);

	$lukutaulukko = array_replace($lukutaulukko, $uusi_luku);

	echo "Luvut korvaamisen jälkeen: " . join(" ", $lukutaulukko) . "<br>";
}

/**************
*  Tehtävä 8  *
**************/
echo "<h3>Tehtävä 8</h3>";

$paakaupungit = array( "Italia"=>"Rooma", "Tanska"=>"Kööpenhamina", "Suomi"=>"Helsinki", "Ranska" => "Pariisi", "Saksa" => "Berliini", "Kreikka" => "Ateena", "Irlanti"=>"Dublin", "Hollanti"=>"Amsterdam", "Espanja"=>"Madrid", "Ruotsi"=>"Tukholma", "Iso-Britannia"=>"Lontoo", "Viro"=>"Tallinna", "Unkari"=>"Budapest", "Itävalta" => "Vienna", "Puola"=>"Varsova");

// kirjoita koodisi alla oleviin tulostuslauseisiin
echo "<p>Suomen pääkaupunki on {$paakaupungit["Suomi"]} </p>";
echo "<p>Italian pääkaupunki on {$paakaupungit["Italia"]} </p>";
echo "<p>Kreikan pääkaupunki on {$paakaupungit["Kreikka"]} </p>";
echo "<p>Hollannin pääkaupunki on {$paakaupungit["Hollanti"]} </p>";
echo "<p>Unkarin pääkaupunki on {$paakaupungit["Unkari"]} </p>";

/**************
*  Tehtävä 9  *
**************/
echo "<h3>Tehtävä 9</h3>";

print_r(array(3, 5, 9));

echo "<br><br>";

$lukutaulukko = array(1,2,3,4,5,6,7,8,9,10);

print_r($lukutaulukko);

echo "<br><br>";

$paakaupungit = array( "Italia"=>"Rooma", "Tanska"=>"Kööpenhamina", "Suomi"=>"Helsinki", "Ranska" => "Pariisi", "Saksa" => "Berliini", "Kreikka" => "Ateena", "Irlanti"=>"Dublin", "Hollanti"=>"Amsterdam", "Espanja"=>"Madrid", "Ruotsi"=>"Tukholma", "Iso-Britannia"=>"Lontoo", "Viro"=>"Tallinna", "Unkari"=>"Budapest", "Itävalta" => "Vienna", "Puola"=>"Varsova") ;

print_r($paakaupungit);

?>

</body>
</html>