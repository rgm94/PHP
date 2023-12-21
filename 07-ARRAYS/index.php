<?php
    print('##LISTAS INDEXADAS EN PHP##');
    echo "<br>";
    $frutas = ['Manzana','Pera','Banana'];#misma sintaxis que en python
    $productos = array('PS5','PS4','XBOX ONE');//otra nanera de crear listas
    echo "La primera fruta de la lista es $frutas[0]","<br>";
    echo "La última consola de la lista es $productos[2]";
    echo "<br>";

    print('##ARRAYS ASOCIATIVOS EN PHP##');//los arrays asociativos son parecidos a los diccionarios en python(clave = valor)
    echo"<br>";
    $edades = ['rodrigo' => 29,'laura'=> 30];
    $edades['juan'] = 25;
    echo $edades['rodrigo'],"<br>";
    echo $edades['laura'],"<br>";
    echo $edades['juan'],"<br>";
    echo "<br>";
    
    print('## UNIR ARRAYS INDEXADOS CON ARRAYS ASOCIATIVOS ##');
    echo"<br>";
    $nombres = array('rodrigo','laura','antonia');
    $edad = ['rodrigo' => 29, 'laura' => 30, 'antonia' => 59];

    echo "# $nombres[0] tiene {$edad['rodrigo']} años","<br>";//en los arrays asociativos hacemos uso de las llaves para poder concatenar
    echo "# $nombres[1] tiene {$edad['laura']} años","<br>";
    echo "# $nombres[2] tiene {$edad['antonia']} años","<br>";
    echo "<br>";

    print("## ARRAYS BIDIMENSIONALES ##");#listas de listas
    echo "<br>";
    $frutas = [['manzana','mango'],['limon','naranja']];//el array bidimensional consta de 2 elementos
    echo $frutas [0][0];//imprime manzana
    echo "<br>";
    echo $frutas [1][1];//imprime naranja
    echo "<br>";
    echo "<br>";

    print("## ARRAYS MULTIDIMENSIONALES ##");#listas de listas
    echo "<br>";
    $frutas = [['manzana','mango'],['limon','naranja',['uvas','cerezas']]];//array que contiene más de 2 elementos
    echo "{$frutas [1][2][0]}";//imprime uvas, con las llaves podemos concatenar y sacar el valor de la lista
    echo "<br>";
    echo "{$frutas [1][2][1]}";//imprime cerezas
    echo "<br>";
    echo "<br>";

    print("## ARRAYS ASOCIATIVOS MULTIDIMENSIONALES ##");
    echo "<br>";
    $frutas2 = ['precio' => ['manzana' => 5,'pera' => 2.5,'piña' => 8],'dulces' => ['bombones']];
    echo "{$frutas2['precio']['manzana']}","<br>";//imprime el valor de manzana que es 5
    echo "{$frutas2['dulces'][0]}";//imprime bombones
    
    

   
    
    
    

?>