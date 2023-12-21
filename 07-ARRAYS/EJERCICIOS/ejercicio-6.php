<?php

//Dada una cadena de texto, cuenta la frecuencia de cada palabra.

$texto = "hola mundo, hola PHP, mundo PHP.";
$palabras = str_word_count($texto,1);
$contador = array_count_values($palabras);
print_r($contador);//Indica el número de veces que se encuentra un elemento en el array
echo "<br>";
print_r($palabras);//Indica el índice y su valor


?>