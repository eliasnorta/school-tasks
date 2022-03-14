<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require __DIR__ . '/vendor/autoload.php'; ?>

    <form action="kirjastot.php" method="post">
        <h4>luku:</h4>
        <input type="text" name="luku" placeholder="luku"><br><br>
        <h4>valitse mittayksikkö:</h4>
        <select name="mittayksikko" id="mittayksikko">
            <option value="km">km (kilometri)</option>
            <option value="m">m (metri)</option>
            <option value="mm">mm (millimetri)</option>
            <option value="cm">cm (senttimetri)</option>
        </select>
        <br><br><input type="submit" name="lisays" value="Muunna"><br><br>
    </form>
    <?php 

    use PhpUnitsOfMeasure\PhysicalQuantity\Length;
    if(isset($_POST["lisays"])) {
        $luku1 = $_POST["luku"];
        $muunnos = $_POST["mittayksikko"];
        echo $luku1 . " " . $muunnos;
        echo " on: ";

        if ($muunnos == "km") {
            $luku1 = new Length($luku1, 'km');
            echo $luku1->toUnit('miles') . " Miles";
        }

        if ($muunnos == "m") {
            $luku1 = new Length($luku1, 'm');
            echo $luku1->toUnit('yard') . " Yard <br>";
            echo $luku1->toUnit('feet') . " Feet";
        }
    
        if ($muunnos == "mm") {
            $luku1 = new Length($luku1, 'cm');
            echo $luku1->toUnit('inch') . " Inch";
        }
    
        if ($muunnos == "cm") {
            $luku1 = new Length($luku1, 'mm');
            echo $luku1->toUnit('inch') . " Inch";
        }
    }

?>
</body>
</html>




