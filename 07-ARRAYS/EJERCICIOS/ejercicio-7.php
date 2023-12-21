<?php
    #Combina dos listas en una sola.

    $l1 = array('rodrigo','laura');
    $l2 = array('gorlat','martos');
    $l3 = array_combine($l1,$l2);//combina las dos listas

   print_r($l3);


?>