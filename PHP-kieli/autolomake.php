<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "autot";

 

    //Muodostetaan yhteys tietokantaan halutuilla tiedoilla
    $yhteys = new mysqli($server, $username, $password, $dbname);

 

    //Tarkistetaan yhteys
    if($yhteys -> connect_error) {
        die("Yhteyden muodostaminen ei onnistu! " . $yhteys -> connect_error);
    } 

 

    mysqli_set_charset($yhteys, "utf8");

 

    $hakusql = "SELECT * from Henkilo";

 

    //Suoritetaan haku
    $tulos = $yhteys->query($hakusql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autolomake</title>
</head>
<body>
    <h4>Syötä auton tiedot:</h4>
    <form action="autolomake.php" method="post">
        <input type="text" name="rekisteri" placeholder="Rekisterinro"/><br><br>
        <input type="text" name="vari" placeholder="Väri"/><br><br>
        <input type="text" name="vuosimalli" placeholder="Vuosimalli"/><br><br>
        <select name="omistaja" >
        <?php
            // tulostetaan henkilöt
            while($rivi = $tulos->fetch_assoc()) {
        ?>
            <option value="<?php echo $rivi['hetu']; ?>"><?php echo $rivi['nimi']; ?></option>
            
        <?php
            } 
        ?>
        </select><br><br>
        <input type="submit" name="lisays" value="Lisää auto"><br><br>
    </form>
    </body>
</html>

 

<?php
if(isset($_POST["lisays"])) {

 

    //poimitaan auton tiedot lomakkeesta
    $rekisteri = $yhteys->real_escape_string($_POST['rekisteri']);
    $vari = $yhteys->real_escape_string($_POST['vari']);
    $vuosimalli = $yhteys->real_escape_string($_POST['vuosimalli']);
    $omistaja = $yhteys->real_escape_string($_POST['omistaja']);
    
    // tarkistetaan, että rekisterinumero ei ole tyhjä
    if(empty($rekisteri)) {
        echo "Anna rekisterinumero.";
    } else {
    
        //tarkistetaan, onko rekisteritunnuksella jo olemassa auto
        $hakusql = "select * from Auto where rekisterinro = '$rekisteri'";

 

        //Suoritetaan haku
        $tulos = $yhteys->query($hakusql);
        if($tulos->num_rows > 0) {
            echo "Rekisterinumero käytössä!";
        } else {

 

            //valmistellaan insert-lause
            $lisayssql = "insert into auto values('$rekisteri', '$vari', '$vuosimalli', '$omistaja')";
            
            //suoritetaan sql-lause ja tarkistetaan onnistuminen
            $result = $yhteys->query($lisayssql);
            if ($result === TRUE) {
                echo "Auton lisääminen onnistui!";
            } else {
                echo "Lisääminen ei onnistunut.";
            }
        }
    }    
}
$yhteys->close();
?>