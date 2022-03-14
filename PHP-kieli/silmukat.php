<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Silmukat</title>
</head>
<body>

<?php

/**************
*  Tehtävä 1  *
**************/
echo "<h3>Tehtävä 1</h3>";


// kirjoita koodisi tähän
$x = 0;

while($x <= 5) {
  echo "Elias ";
  $x++;
}

/******************
*  Tehtävät 2 + 3 *
******************/
echo "<h3>Tehtävät 2 ja 3</h3>";
?>

<form action="silmukat.php" method="post">
Anna yläraja: <input type="text" name="ylaraja"><br>
<input type="submit" name="tehtava2">
</form>

<?php

if(isset($_POST["tehtava2"])) {
	
	$ylaraja = $_POST["ylaraja"];
	
	$b = 1;
	// kirjoita koodisi tähän
	while($b < $ylaraja) {
		echo $b;
		$b++;
	}
	echo "<br>";
	for ($i=1; $i < $ylaraja; $i++) { 
		echo $i;
	}

}

/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

// kirjoita koodisi tähän
$x = 10;
$r = 10;
for ($i = 1; $i <= $r; $i++) {
    echo $i, " * ", $x, " = ", $i * $x, "<br>";
}

/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="silmukat.php" method="post">
Alaraja: <input type="text" name="alaraja"><br>
Yläraja: <input type="text" name="ylaraja"><br>
<input type="submit" name="tehtava5">
</form>

<?php

if(isset($_POST["tehtava5"])) {

	$alaraja = $_POST["alaraja"];
	$ylaraja = $_POST["ylaraja"];
	
	// kirjoita koodisi tähän
	$c = $alaraja;
	$summa = 0;

	for ($i=$alaraja; $i <= $ylaraja; $i++) { 
		$summa += $i;
		echo "{$i} ";
		if ($i < $ylaraja) {
			echo "+ ";
		}
	}
	echo "= {$summa}";

	echo "<br>Lukusarjan summa on {$summa}.";
}

/**************
*  Tehtävä 6  *
**************/
echo "<h3>Tehtävä 6</h3>";

$lukutaulukko = array();

// kirjoita koodisi tähän
for ($i=1; $i <= 20; $i++) { 
	array_push($lukutaulukko, $i);
}

/**************
*  Tehtävä 7  *
**************/
echo "<h3>Tehtävä 7</h3>";

// kirjoita koodisi tähän
foreach($lukutaulukko as $value){
    echo $value . "<br>";
}

/**************
*  Tehtävä 8  *
**************/
echo "<h3>Tehtävä 8</h3>";

$paakaupungit = array( "Italia"=>"Rooma", "Tanska"=>"Kööpenhamina", "Suomi"=>"Helsinki", "Ranska" => "Pariisi", "Saksa" => "Berliini", "Kreikka" => "Ateena", "Irlanti"=>"Dublin", "Hollanti"=>"Amsterdam", "Espanja"=>"Madrid", "Ruotsi"=>"Tukholma", "Iso-Britannia"=>"Lontoo", "Viro"=>"Tallinna", "Unkari"=>"Budapest", "Itävalta" => "Vienna", "Puola"=>"Varsova");

// kirjoita koodisi tähän
foreach($paakaupungit as $key => $value)
{
  echo $key.": ". $value . "<br>";
}

?>

</body>
</html>