
<?php

    #Invierte el orden de una lista.

    $lista = ['rodrigo','laura','juan','carlos','antonio'];
    $nuevalista = array_reverse($lista);

    foreach ($nuevalista as $i){

        echo "- $i <br>";
    }


?>
