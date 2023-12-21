<?php

//Dada una lista y un valor, elimina todas las ocurrencias de ese valor en la lista.

$lista = array('rodrigo','laura','rodrigo',15,6,'rodrigo');
$valor = 'rodrigo';

$nuevalista = array_unique($lista);//quitamos los duplicados
$indice = array_search($valor,$nuevalista);//indica el índice en el que se encuentra el elemento que queremos eliminar

if ($indice !== FALSE){

    unset($nuevalista[$indice]);//elimina el elemento
    print_r($nuevalista);
}else{

    echo "ese elemento no se encuentra en la lista";
}


?>
