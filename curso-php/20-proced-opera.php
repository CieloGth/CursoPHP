<?php
    $contador112 = 55;
    $resultado2 =  $contador112++ ;
    echo $resultado2; echo "<br>";

    /* primero la asigna y luego suma 
    ($resultado2 =  $contador112)++ ;
    */

    #asociatividad de izquierda
    echo 1 - 2 - 3; echo "<br>";
    /* se empieza de izquierda como si fuera asi:*/
    echo (1 - 2) - 3; echo "<br>";
    /*con parentecis se fuerza a realizar primero una accion como:*/
    echo 1 - (2 - 3); echo "<br>";

    #asociatividad de derecha
    $c=10;
    $a = $b = $c;
    echo $a; echo "<br>";

    
    $michis_4_patas= true;
    $michis_programan_con_PHP = false;
    
    $resultado = $michis_4_patas and $michis_programan_con_PHP;
    // ($resultado = $michis_4_patas) and $michis_programan_con_PHP;
    var_dump($resultado);
    echo "\n <br>";

    $resultado = ($michis_4_patas and $michis_programan_con_PHP);
    var_dump($resultado);
    echo "\n <br>";
?>