<?php
/*Dada una lista de números, encuentra el número más grande. */

$lista = [1,2,10,3,4,5];
$mayor = 0;


foreach($lista as $i){

        if ($i > $mayor){

            $mayor = $i;
        }

}
echo "# El número mayor de la lista es $mayor";


?>