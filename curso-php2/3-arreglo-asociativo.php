<?php 
        /*Arreglo asociativo */
    $edades = array(
        "Carlos" => 18,
        "Ms. Michi" => 6,
        "Cielo" => 23,
        "Juan" => 70
    );
    echo "La edad de Carlos es " . $edades["Carlos"] . "\n";
    echo "La edad de Ms. Michi es " . $edades["Ms. Michi"] . "\n";

    $cafes = array(
        "Capuchino" => 50,
        "Latte" => 49,
        "Americano" => 70,
        "Chocolate" => 30,
    );
    echo "El precio del cafe Latte es {$cafes['Latte']} \n";

    $personas = array(
        "Carlos" => array(
            "apellido"=> "Santana",
            "edad" => 18,
            "colorf" => "Amarillo"
        ),
        "Mr. Michi" => array(
            "apellido"=> "Michisancio",
            "edad" => 6,
            "colorf" => "Gris"
        ),
        "Cielo" => array(
            "apellido"=> "Corona",
            "edad" => 23,
            "colorf" => "Azul"
        ),
        "Juan" => array(
            "apellido"=> "Perez",
            "edad" => 70,
            "colorf" => "Rojo"
        )
    );
    echo "La edad de Ms. Michi es: " . $personas["Mr. Michi"]["edad"] . " años y su apellido es {$personas['Mr. Michi']['apellido']}"."\n";

?>