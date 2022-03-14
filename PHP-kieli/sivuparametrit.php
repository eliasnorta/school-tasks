<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Sivuparametrit</title>
</head>
<body>

<?php

/**************
*  Tehtävä 1  *
**************/
echo "<h3>Tehtävä 1</h3>";
?>

<a href="sivuparametrit.php?tekno=html">HTML</a><br>
<a href="sivuparametrit.php?tekno=css">CSS</a><br>
<a href="sivuparametrit.php?tekno=javascript">Javascript</a><br>
<a href="sivuparametrit.php?tekno=php">PHP</a><br>
<a href="sivuparametrit.php?tekno=java">Java</a><br>


<?php

if(isset($_GET["tekno"])) {
	
	// kirjoita koodisi tähän
	$mikälinkki = $_GET["tekno"];

	if ($mikälinkki == "html") {
		echo "<br>HTML kuvaa dokumentin rakenteen.";
	} else if ($mikälinkki == "css") {
		echo "<br>CSS määrittää dokumentin ulkoasun.";
	} else if ($mikälinkki == "javascript") {
		echo "<br>Javascript on selainpuolen kieli.";
	} else if ($mikälinkki == "php") {
		echo "<br>PHP on palvelinpuolen kieli.";
	} else {
		echo "<br>Haluamaasi teknologiaa ei löydy";
	}
}

/**************
*  Tehtävä 2  *
**************/
echo "<h3>Tehtävä 2</h3>";
?>

<form action="sivuparametrit.php" method="post">
Etunimi: <input type="text" name="etunimi"><br>
Sukunimi: <input type="text" name="sukunimi"><br>
<input type="submit" name="tehtava2">
</form>

<?php

echo "<br>";
if(isset($_POST["tehtava2"])) {
	
	// kirjoita koodisi tähän

	$etunimi = $_POST["etunimi"];
	$sukunimi = $_POST["sukunimi"];
	
	echo "Etunimi: {$etunimi}"; 
	echo "<br>";
	echo "Sukunimi: {$sukunimi}";

}

/*******************
*  Tehtävät 3 + 4  *
*******************/
echo "<h3>Tehtävät 3 ja 4</h3>";
?>

<form action="sivuparametrit.php" method="post">

Nimi * <input type="text" name="nimi">
<br>
Sähköposti * <input type="text" name="sposti">
<br>
Salasana * <input type="password" name="salasana">
<br>
Sukupuoli 
<input type="radio" name="sukupuoli" value="mies" checked>Mies
<input type="radio" name="sukupuoli" value="nainen">Nainen
<input type="radio" name="sukupuoli" value="muu">Muu
<br>
Maakunta
<select name="maakunta">
<option value="Ahvenanmaa">Ahvenanmaa</option>
<option value="Etelä-Karjala">Etelä-Karjala</option>
<option value="Etelä-Pohjanmaa">Etelä-Pohjanmaa</option>
<option value="Etelä-Savo">Etelä-Savo</option>
<option value="Kainuu">Kainuu</option>
</select>
<br>
Kuvaus
<br>
<textarea name="kuvaus"></textarea><br>
<input type="submit" name="tehtava3" value="Rekisteröidy">

<input type="hidden" name="liittymisvuosi" value="2021">

</form>

<?php

// kirjoita koodisi tähän

if(isset($_POST["tehtava3"])) {
	//$etunimi = $_POST["etunimi"];

	$nimi = $_POST["nimi"];
	$sposti = $_POST["sposti"];
	$salasana = $_POST["salasana"];

	if ((empty($nimi)) or (empty($sposti)) or (empty($salasana))) {
		echo "<br>Täytä kaikki tähdellä merkityt kentät";
	}
}

/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="sivuparametrit.php" method="post">
Nimi: <input type="text" name="nimi"><br>
Otsikko: <input type="text" name="otsikko"><br>
Teksti:<br>
<textarea name="teksti"></textarea>
<input type="submit" name="tehtava5">
</form>

<?php

// kirjoita koodisi tähän

if(isset($_POST["tehtava5"])) {
	//$etunimi = $_POST["etunimi"];

	$nimi = $_POST["nimi"];
	$otsikko = $_POST["otsikko"];
	$teksti = $_POST["teksti"];

	if ((empty($nimi)) or (empty($otsikko)) or (empty($teksti))) {
		echo "<br>Täytä kaikki kentät.";
	} else {
		echo "<br>";
		echo strip_tags($otsikko);
		echo " || ";
		echo strip_tags($nimi);
		echo "<br>";
		echo strip_tags($teksti);
	}
}

?>

</body>
</html>