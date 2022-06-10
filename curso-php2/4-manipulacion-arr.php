<?php
    #funcion count
    $edades = [18,22,60,3,28,34];
    echo count($edades); echo "\n";

    #array_push
    array_push($edades, 13);
    var_dump($edades);

    #is_array
    $esto ="Esto no es un arreglo";
    var_dump(is_array($esto));
    var_dump(is_array($edades));

    #explode
    $lista_de_frutas ="fresa,cereza,manzana";
    $array_de_lista = explode(",",$lista_de_frutas);
    var_dump($array_de_lista);

    #implode 
    $lista_de_frutas_array =["fresa","cereza","manzana"];
    $string_de_lista = implode(", ",$lista_de_frutas_array);
    var_dump($string_de_lista);

    #array_unique 
    $entrada = [4,9,6,4,3,8,5,5,8,5,9,4,2,1,8,7];
    $resultado= array_unique($entrada);
    var_dump($entrada);
    var_dump($resultado);
    
    #https://www.php.net/manual/es/ref.array.php
?>