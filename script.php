<?php

$parola = $_GET["parola"];
$paragrafo = $_GET["paragrafo"];
echo var_dump($parola, $paragrafo); 
//Stampa del paragrafo e la sua lunghezza
echo $paragrafo . "<br>";
echo "Il paragrafo è lungo " . strlen($paragrafo) . " caratteri" . "<br>";
// Sostituisco la parola scritta con gli asterischi nel paragrafo e lo stampo  con la sua lunghezza
echo str_replace($parola, '***', $paragrafo) . "<br>";
echo  "Il paragrafo censurato è lungo " . strlen( str_replace($parola, '***', $paragrafo)) . " caratteri";

?>