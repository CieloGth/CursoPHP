<?php
    //Operador de asignacion
    echo "<h2>Operador de asignacion </h2>";

    $edad_de_jaimito = ($edad_de_pepito = 18) + 5;
    
    echo "La edad de pepito es $edad_de_pepito"; echo "<br>";
    echo "La edad de jaimito es $edad_de_jaimito"; echo "<br>";

    echo "<hr>";

    //Operadores de incremento
    echo "<h2>Operador de incremento </h2>";

    $contador = 5;
    $contador = $contador + 1;
    echo "x=x+1 <br>"; echo $contador; echo "<br>";
    
    $contador1 = 5;
    $contador1 += 1;
    echo "x+=1 <br>"; echo $contador1; echo "<br>";

    $contador = 5;
    $contador ++;
    echo " x++ <br>"; echo $contador; echo "<br>";

    echo "<hr>";

    //Operador de decremento
    echo "<h2>Operador de decremento </h2>";

    $contador2 = 5;
    $contador2 = $contador2 - 1;
    echo "x=x-1 <br>"; echo $contador2; echo "<br>";
    
    $contador3 = 5;
    $contador3 -= 1;
    echo "x-=1 <br>"; echo $contador3; echo "<br>";

    $contador4 = 5;
    $contador4 --;
    echo " x-- <br>"; echo $contador4; echo "<br>";

    echo "<hr>";

    //Operador de divicion
    echo "<h2>Operador de divicion </h2>";

    $contador5 = 55;
    $contador5 = $contador5 / 15;
    echo "x=x/15 <br>"; echo $contador5; echo "<br>";
    
    $contador6 = 55;
    $contador6 /= 15;
    echo "x/=15 <br>"; echo $contador6; echo "<br>";


    echo "<hr>";

    //Operador de multiplicacion
    echo "<h2>Operador de multiplicacion </h2>";

    $contador7 = 55;
    $contador7 = $contador7 * 15;
    echo "x=x*15 <br>"; echo $contador7; echo "<br>";
    
    $contador8 = 55;
    $contador8 *= 15;
    echo "x*=15 <br>"; echo $contador8; echo "<br>";


    echo "<hr>";

    //Operador de concatenacion
    echo "<h2>Operador de concatenacion </h2>";

    $nombre = "Carlos";
    $nombre = $nombre ." ". "Santana";
    echo $nombre; echo "<br>";
    
    $nombre = "Carlos";
    $nombre .= " ". "Santana";
    echo $nombre; echo "<br>";

    echo "<hr>";

    //Operador de procedencia
    echo "<h2>Procedencia de Operador  </h2>";

    $contador11 = 55;
    $resultado = ++ $contador11 ;
    echo $resultado; echo "<br>";

    $contador112 = 55;
    $resultado2 =  $contador112++ ;
    echo $resultado2; echo "<br>";

    echo "<hr>";
?>