<?php
        // 1
    function suma($a = 1, $b = 1){
        echo "La suma de $a + $b es: " . $a+$b . "\n";
    }
    suma(1,2);
    suma(5,7);
    suma(9,3);
    suma(8);
    echo "\n";


        // 2
    $arreglo1 = [1,2,3];
    $arreglo2 = [4,5,6];
    $resultado = [... $arreglo1, ...$arreglo2];
    var_dump($resultado);
    echo "\n";


        // 3
    $numeros1=[1,2];
    $numeros2=[100,20];
    $numeros3=[156,891];
    function sumanumeros($a , $b){
        echo "La suma del numero $a + el numero $b es: " . $a+$b . "\n";
    }
    sumanumeros(...$numeros1);
    sumanumeros(...$numeros2);
    sumanumeros(...$numeros3);
    echo "\n";


        // 4
    function suma_infinita(...$parametro){
        var_dump($parametro);
        $suma=0;
        foreach ($parametro as $numero) {
            $suma += $numero;
        }
        echo "La suma es: $suma \n"; 
    }
    suma_infinita(9,9,2,6,4,5,8,10);
    suma_infinita(156,85);
?>