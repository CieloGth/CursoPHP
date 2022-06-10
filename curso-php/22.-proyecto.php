<?php
    $horas = readline("Ingresa el tiempo en horas: ");
    $minutos = readline("Ingresa el tiempo en minutos: ");
    $segundos = readline("Ingresa el tiempo en segundos: ");
    
    $tiempo = ($horas * 3600) + ($minutos * 60) + $segundos;


    echo "Este tiempo tiene $tiempo segundos. \n";
 ?>
