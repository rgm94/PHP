<?php

#Escribe un programa que elimine los elementos duplicados de una lista.

$lista = ['rodrigo','laura','rodrigo','laura',5,5,6,6,1,2,3];
$nueva_lista = array_unique($lista);//método que elimina los elementos repetidos en un array
foreach($nueva_lista as $i){

    echo "- $i<br>";
}
?>