<?php
    //2 -> 1
    //3 -> 2
    //4 -> 3
    //5 -> 5
    //6 -> 8
    //7 -> 13
    //8 -> 21
    //9 -> 34
    $tienda = (int) readline("Dime el numero de tienda a ir: ");
    $anterior = 0;
    $actual = 1;

    for ($i=2; $i <= $tienda  ; $i++) { 
        $temporal = $actual;

        $actual += $anterior;

        $anterior = $temporal;
        //echo $actual . "\n";
    }
    echo "Hay $actual formas distintas de llegar \n";
    echo "\n";
?>