<?php

    print("## CONDICIONAL IF ##");
    echo "<br>";

    $a = 10;
    $b = '10';
    $c = 5;
    $d = '5';
    $e = 15;
    $f = 10;
    $numero1 = 36;
    $numero2 = 50;


    if ($a == $b) //uso de operador igual que
        {echo 'son iguales';}//imprime True porque solo examina el número y no su tipo
    echo "<br>";

    if ($c === $d) //uso de operador estrictamente igual que
        {echo 'son iguales';}//imprime False porque compara un entero con un string
    //este operador se usa para verificar que el numero y su tipo son exactamente iguales
    echo "<br>";
    
    if ($a != $c) //uso de operador diferente que
        {echo 'son diferentes';}//imprime que los números son diferentes
    //examina que los números son distintos. No examina su tipo de dato
    echo "<br>";

    if ($d !== $c) //uso de operdor estrictamente diferente que
        {echo 'los números son distintos';}//imprime que los numeros son diferente
    //examina los números y el tipo de dato
    echo "<br>";

    if ($e > $f) //uso del operador mayor que
        {echo "$e es mayor que $f";}
    echo "<br>";

    if ($f < $e) //uso del operador menor que
        {echo "$f es menor que $e";}
    echo "<br>";

    if (4 < 5 and 5 > 3)//usamos && ques el operador AND para ver si todas las opciones son correctas
        {echo '# todas las condiciones son correctas';}//como todo es correcto, se imprime el mensaje

    echo "<br>";

    if ($numero1 === 50 or $numero2 === 50 )// usamos (||) que es el operador OR, éste operador evalua si se cumple al menos una de las condiciones
        {echo '# una de las condiciones se ha cumplido';}#como se cumple una de las condiciones, se imprime el mensaje
    
    echo "<br>";

    if (!($numero1 === 50))//usamos la exclamación (!) NOT, para ver si la variable no es correcta o verdadera
        {echo "# el número no es exactamente igual a 50";}//como la condición es falsa se imprime el mensaje
    echo "<br>";

    if ($numero2 === 50)//evaluamos si la condición es verdadera
        {echo '# el numero es exactamente igual a 50';}//al ser verdadera se ejecuta el código

    

?>