<?php

    print('## BUCLE FOREACH EN PHP ##');
    echo "<br>";
    //este bucle se usa para recorrer arrays(listas)

    $colores = array('azul','verde','negro','rojo','amarillo','marrón','naranja');
  

    foreach($colores as $i)//colores como i
        
        {echo "# $i <br>";}
    echo "<hr>";

    print('## SACAR INDICES DE UN ARRAY CON BUCLE FOREACH ##');
    echo '<br>';

    $peliculas = array('gladiator','braveheart','harry potter','el patriota','el señor de los anillos');

    foreach($peliculas as $clave => $valor)//recorremos el array como un diccionario en python creando la clave y el valor

        {echo "# En el elemento $clave se encuentra la pelicula $valor <br>";}
    /*
    for ($i = 0;$i < count($colores); $i += 1)//creamos la variable i con valor 0 para recorrer la lista

        echo "# " . $colores[$i] . "<br>";
    */



?>