<?php

    print("## BREAK Y CONTINUE EN PHP ##");
    echo "<br>";
    print("## BREAK ## <br>");

    for ($a = 1; $a < 11; $a += 1 ){
        echo "Número $a <br>";

        if ($a == 5 )
            break;//al ser igual a 5 código se para.

    }
    echo "<hr>";

?>
<?php

print("## CONTINUE ## <br>");

for ($b = 1; $b < 11; $b += 1){
    
    if ($b == 5)//el código se salta el número 5 y sigue contando hasta 10.
        continue;
    echo "Número $b<br>";
    
}

?>
   
