<?php
//Dada una lista y un valor, crea una función que determine si el valor está presente en la lista.

$lista = ['rodrigo','laura',5,6,7];
$valor = 'laura';

foreach ($lista as $i){

    if ($i === $valor){

        echo "El valor $valor se encuentra en la lista<br>";
        echo "El valor se encuentra en el índice " . array_search($valor,$lista);
        
    }
    
}

?>