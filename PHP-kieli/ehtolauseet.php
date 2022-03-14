<!DOCTYPE html>
<html>
<head>
<title>Tehtäviä: Ehtolauseet</title>
</head>
<body>

<?php

/**************
*  Tehtävä 1  *
**************/
echo "<h3>Tehtävä 1</h3>";

$luku = rand(-10, 10);

// kirjoita koodisi tähän

if ($luku <= 0) {
	echo "Luku x on positiivinen";
} else {
	echo "Luku x on negatiivinen";
}

/**************
*  Tehtävä 2  *
**************/
echo "<h3>Tehtävä 2</h3>";
?>

<form action="ehtolauseet.php" method="post">
Onko PHP palvelinpuolen kieli?<br>
<input type="radio" name="vastaus" value="kyllä">Kyllä
<input type="radio" name="vastaus" value="ei">Ei
<input type="radio" name="vastaus" value="ehkä">Ehkä<br>
<input type="submit" name="tehtava2">
</form>

<?php
if(isset($_POST["tehtava2"])) {
	
	$vastaus = $_POST["vastaus"];
	
	// kirjoita koodisi tähän
	if ($vastaus == "kyllä") {
		echo "Pitää paikkansa!";
	} else {
		echo "Jäikö teoria lukematta?";
	}

}
/******************
*  Tehtävät 3 + 4  *
******************/
echo "<h3>Tehtävät 3 ja 4</h3>";
?>

<form action="ehtolauseet.php" method="post">
Millainen lemmikki sinulla on?<br>
<select name="lemmikki">
<option value="koira">Koira</option>
<option value="kissa">Kissa</option>
<option value="kala">Kala</option>
<option value="lisko">Lisko</option>
<option value="marsilainen">Marsilainen</option>
</select>
<br>
<input type="submit" name="tehtava3">
</form>

<?php
if(isset($_POST["tehtava3"])) {
	
	$lemmikki = $_POST["lemmikki"];
	
	// kirjoita koodisi tähän

	if ($lemmikki == "koira" or $lemmikki == "kissa") {
		echo "Sinulla on mukava karvainen kaveri.";
	} elseif ($lemmikki == "kala") {
		echo "Lemmikkisi on helppohoitoinen.";
	} elseif ($lemmikki == "lisko") {
		echo "Taidat pitää matelijoista.";
	} else {
		echo "Lemmikkisi on outo.";
	}

}
/******************
*  Tehtävät 5 + 6  *
******************/
echo "<h3>Tehtävät 5 ja 6</h3>";

?>

<form action="ehtolauseet.php" method="post">
Käyttäjätunnus: <input type="text" name="tunnus"><br>
Salasana: <input type="text" name="salasana"><br>
<input type="submit" name="tehtava5">
</form>

<?php

if(isset($_POST["tehtava5"])) {
	
	$tunnus = $_POST["tunnus"];
	$salasana = $_POST["salasana"];
	
	// kirjoita koodisi tähän
	
	if ($tunnus == "Olli" and $salasana == "opiskelija") {
		echo "Käyttäjä kirjattu järjestelmään.";
	} elseif ($tunnus == "Maija" and $salasana == "meikalainen") {
		echo "Käyttäjä kirjattu järjestelmään.";
	} elseif ($tunnus == "Olli") {
		echo "Salasana on väärin.";
	} elseif ($tunnus == "Maija") {
		echo "Salasana on väärin.";
	} else {
		echo "Käyttäjätunnusta ei löydy järjestelmästä.";
	}
}

/**************
*  Tehtävä 7  *
**************/
echo "<h3>Tehtävä 7</h3>";
?>
<form action="ehtolauseet.php" method="post">
Anna arvosana<br>
<select name="arvosana">
<option value="-1">-1</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>

</select>
<br>
<input type="submit" name="tehtava7">
</form>

<?php
if(isset($_POST["tehtava7"])) {
	
	$arvosana = $_POST["arvosana"];
	
	// kirjoita koodisi tähän

	switch ($arvosana) {
		case $arvosana >= 1 or $arvosana == 2:
			echo "Tyydyttävä";
				break;
		case $arvosana == 3 or $arvosana == 4:
			echo "Hyvä";
			break;
		case $arvosana == 5:
			echo "Kiitettävä";
			break;
		case $arvosana > 1:
			echo "Arvosana ei kelpaa.";
			break;
		case $arvosana <= 6:
			echo "Arvosana ei kelpaa.";
			break;
	}
}

/**************
*  Tehtävä 8  *
**************/
echo "<h3>Tehtävä 8</h3>";
?>
<form action="ehtolauseet.php" method="post">
Mistä haluaisit lukea?<br>
<select name="aihe">
<option value="urheilu">Urheilu</option>
<option value="politiikka">Politiikka</option>
<option value="koulutus">Koulutus</option>
</select>
<br>
<input type="submit" name="tehtava8">
</form>

<?php
if(isset($_POST["tehtava8"])) {
	
	$aihe = $_POST["aihe"];
?>
	
	<?php if($aihe == "urheilu") : ?>
	
	<h3>Urheilu</h3>

	<p>Urheilu on liikuntamuoto, jota harjoitetaan fyysisen kunnon ylläpitämiseksi, virkistykseksi ja sääntöjen mukaisena kilpailuna. Siihen kuuluvat myös huvi- tai kilpailumielessä harrastetut suoritukset, joissa mekaanisten laitteiden tai eläinten osuus on merkittävä. Kilpaurheilun näkyvin osa on huippu-urheilu.</p>

	<p>Kilpaurheilulle tyypillistä on yksilön tai joukkueen taidoissa tai ylivertaisuudessa kilpaileminen. Urheilu voidaan jakaa tulos- ja sääntöurheiluun: tulosurheilussa tärkeintä on saavutetun tuloksen suuruus, kun taas sääntöurheilussa pyrkimyksenä on suorituksen muodon sääntöjen mahdollisimman tarkka noudattaminen kuten voimistelussa, tanssissa tai uimahypyissä.</p>

	<p>Urheilulajeja on runsaasti, ja ihmiset käyttävät niihin nykyään merkittävän osan ajastaan, rahastaan ja huomiostaan joko harrastajina, kilpailijoina tai katsojina eli ”penkkiurheilijoina”.</p>

	<p>Urheilu on myös merkittävä mediaviihteen muoto. Maailman seuratuimpia urheilutapahtumia ovat jalkapallon, kriketin ja rugbyn maailmanmestaruuskilpailut, jalkapallon Mestarien liiga ja Maanosaliittojen Cup, kesäolympialaiset, Aasian kisat ja pyöräilykilpailu Ranskan ympäriajo.</p>

	<?php elseif($aihe == "politiikka") : ?>
	
	<h3>Politiikka</h3>
	
	<p>Sana politiikka juontuu antiikin kreikan kielen sanasta politikos, "kansalaisia koskevaa". Alkuperältään politiikka on käytännön tai teorian vaikuttamista toisiin ihmisiin globaalilla, kansallisella tai yksilöllisellä tasolla. Nykyisessä yleiskielessä sanalla politiikka tarkoitetaan usein johonkin tiettyyn kokonaisnäkemykseen tai aatteeseen pohjautuvaa toimintaa, jolla pyritään vaikuttamaan valtiollisiin, valtioiden välisiin tai yhteiskunnallisiin asioihin tai jolla hoidetaan niitä.[1] Usein sanaa käytetään puolueiden toiminnasta.</p>

	<p>Politiikan alaan sisällytetään oikeusvaltiossa lähinnä lainsäädännön muuttamiseen ja julkisen hallinnon ohjaamiseen tähtäävä toiminta. Poliittisen vastakohtana on perinteisesti nähty yksityinen, eli toiminta jonka ei katsota liittyvän muihin yksilöihin. Sitä kreikan kielessä merkitsi taloutta tarkoittanut sana oikos, josta on sittemmin johdettu ekonomia, taloustiede.</p>

	<p>Iskulause "henkilökohtainen on poliittista" tuli tunnetuksi 1960-luvulla. Sen mukaan kaikkia yksilöiden välisiä suhteita koskevia asioita pitäisi tuoda valtapolitiikan aiheiksi. Alun perin iskulause kiinnitti huomiota siihen, että ihmisten välisissä jokapäiväisissä suhteissa toteutetaan ja pidetään yllä poliittisesti ja moraalisesti tärkeitä asioita, ja siksi poliittisen toiminnan pitää ulottua myös arkeen.</p>
	
	<?php elseif($aihe == "koulutus") : ?>
	
	<h3>Koulutus</h3>

	<p>Koulutus viittaa siihen kasvatuksen alueeseen, joka on organisoitua ja institutionalisoitua. Koulutus tähtää tietojen opettamiseen, taitojen harjaannuttamiseen sekä kognitiivisten kykyjen kehittämiseen. Koulutusta järjestävää instituutiota nimitetään kouluksi.</p>

	<p>Koulutuksen määrä on viimeisen sadan vuoden kuluessa kasvanut merkittävästi. Jonkinlainen koulutus on nykyisin pakollinen kaikille ihmisille useimmissa maissa oppivelvollisuuden yleistyttyä nopeasti 1900-luvun aikana. Väestönkasvun ja koulutuksen määrän maailmanlaajuisen kasvun seurauksena Unesco arvioi, että seuraavan 30 vuoden koulutuksen useampi ihminen saa muodollisen koulutuksen kuin ihmiskunnan koko aiemman historian aikana.</p>
	
	<?php endif; ?>

<?php
}
?>
</body>
</html>