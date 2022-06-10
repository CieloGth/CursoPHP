<?php
    $a=5;
    $b=5;
    $b2="5";
    $c=9;
    $d=2;

    // == Igual
    echo "<h2>Igual == </h2>";

    var_dump($a==$b); echo "<br>";
    var_dump($a==$b2); echo "<br>";

    echo "<hr>";

    //=== Identico (Compara tipos)
    echo "<h2>Identico === </h2>";
    echo "<h4>Compara tipos</h4>";
    
    var_dump($a===$b); echo "<br>";
    var_dump($a===$b2); echo "<br>";

    echo "<hr>";

    // != Diferente
    echo "<h2>Diferente !=</h2>";

    var_dump($a!=$b); echo "<br>";
    var_dump($a!=$b2); echo "<br>";

    echo "<hr>";

    // !== Diferente (Compara tipos)
    echo "<h2>Diferente !==</h2>";
    echo "<h4>Compara tipos</h4>";

    var_dump($a!==$b); echo "<br>";
    var_dump($a!==$b2); echo "<br>";
 
    echo "<hr>";

    // < Menor que
    echo "<h2>Menor que < </h2>";

    var_dump($a<$b); echo "<br>";
    var_dump($c<$b); echo "<br>";
    var_dump($d<$b); echo "<br>";

    echo "<hr>";

    // <= Menor o igual que
    echo "<h2>Menor o igual que <= </h2>";

    var_dump($a<=$b); echo "<br>";
    var_dump($c<=$b); echo "<br>";
    var_dump($d<=$b); echo "<br>";

    echo "<hr>";

    // > Mayor que
    echo "<h2>Mayor que > </h2>";

    var_dump($a>$b); echo "<br>";
    var_dump($c>$b); echo "<br>";
    var_dump($d>$b); echo "<br>";

    echo "<hr>";

    // >= Mayor o igual que
    echo "<h2>Mayor o igual que >= </h2>";

    var_dump($a>=$b); echo "<br>";
    var_dump($c>=$b); echo "<br>";
    var_dump($d>=$b); echo "<br>";

    echo "<hr>";

    // <=> Nave Espacial
    echo "<h2>Nave Espacial <=> </h2>";

    echo 2 <=> 1 ; echo "<br>";
    echo 2 <=> 2 ; echo "<br>";
    echo 2 <=> 3; echo "<br>";

    echo "<hr>";

    // ?? Fusion de null
    echo "<h2>Fusion de null ?? </h2>";

    $edad1=23;

    echo $edad1 ?? $edad2 ; echo "<br>";
    echo $edad1 ?? $edad2 ?? $edad3; echo "<br>";

    echo "<hr>";
?>