<?php
    $cafeteria = array(
        "Cafe Americano" => 20,
        "Cafe Late" =>25,
        "Cafe Capuchino" => 27.5,
        "Cafe Mocca" => 24,
        "Chocolate" => 23,
        "Te" => 15,
        "Te ingles"=> 22
    );

    foreach($cafeteria as $tipo => $precio){
        echo "El $tipo cuesta $$precio USD \n";
    }
    echo "\n";

    foreach ($cafeteria as $tip => $pre) {
        echo "Actualmente encontre al  $tip \n";
        if ($tip == "Cafe Mocca") {
            echo "Encontramos al Cafe Mocca" ."\n";
            break;
        }
    }
    echo "\n";

    foreach ($cafeteria as $cafe => $cuesta) {
        if($cafe == "Pan")
            continue;

        echo "El $cafe es muy rico y tiene un precio de $$cuesta \n";
        
    }
    echo "\n";
?>