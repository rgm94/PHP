<?php
/*
Crea una lista de números y escribe un programa que calcule la suma de todos los elementos.
*/ 

$lista = [1,2,3,4,5];
$suma = 0;

foreach($lista as $i){

    $suma += $i;
}
echo "# El valor total de la lista es de: $suma";


?>