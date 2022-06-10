<?php 
    $michis_felinos = true;
    $michis_4_patas= true;
    $michis_vuelan=false;
    $michis_programan_con_PHP = false;

    //AND
    var_dump($michis_felinos && $michis_4_patas);
    echo "\n <br>";

    //Or
    var_dump($michis_4_patas || $michis_vuelan);
    echo "\n <br>";
    // Not
    var_dump(!$michis_4_patas);
    echo "\n <br>";

    $resultado = $michis_4_patas and $michis_programan_con_PHP;
    var_dump($resultado);
    echo "\n <br>";

?>