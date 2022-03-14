<?php 

$xml=simplexml_load_file("ohjelmistorajapinnat.xml") or die("Virhe: XML-syötteen käsittely epäonnistui");

//echo $xml->item[0]->pubDate;

foreach($xml->children() as $item) {
    echo $item->pubDate . "<br>";
    echo $item->title . "<br>";
    echo $item->description . "<br>";
}


?>