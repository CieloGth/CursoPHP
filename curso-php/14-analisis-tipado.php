<?php
    #facil
    echo "<h1>Facil</h1>";

    $facil_nombre = "Cielo" ;
    var_dump($facil_nombre);
    echo "\n <br>";

    $facil_apellido = "Corona" ;
    var_dump($facil_apellido);
    echo "\n <br>";

    $facil_edad = 22;
    var_dump($facil_edad);
    echo "\n <br>";

    $facil_aprobado = true;
    var_dump($facil_aprobado);
    echo "\n <br>";

    echo "<hr>";

    #medio
    echo "<h1>Medio</h1>";

    $medio_promedio =(8 + 9.5 + 9 + 10 + 8)/5 ;
    var_dump($medio_promedio);
    echo "\n <br>";

    $medio_nombre_completo = $facil_nombre . " " . $facil_apellido;
    var_dump($medio_nombre_completo);
    echo "\n <br>";

    $medio_presento_examen = (bool) 1 ;
    var_dump($medio_presento_examen);
    echo "\n <br>";

    echo "<hr>";


    #dificil
    echo "<h1>Dificil</h1>";

    $dificil_numero_preguntas = 5 + "5";
    var_dump($dificil_numero_preguntas);
    echo "\n <br>";

    $dificil_numero_respuestas = "5" + 5 ;
    var_dump($dificil_numero_respuestas);
    echo "\n <br>";

    $dificil_promedio_maximo = $dificil_numero_respuestas/1.0;
    var_dump($dificil_promedio_maximo);
    echo "\n <br>";

    $dificil_michis = 3 + "5 michis";
    var_dump($dificil_michis);
    echo "\n <br>";


?>