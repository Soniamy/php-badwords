<?php

$parola = $_GET["parola"];
$paragrafo = $_GET["paragrafo"];
echo var_dump($parola, $paragrafo); 
//Stampa del paragrafo e la sua lunghezza
echo $paragrafo . "<br>";
echo "Il paragrafo è lungo " . strlen($paragrafo) . " caratteri" . "<br>";

?>