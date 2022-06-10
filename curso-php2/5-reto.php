<?php 
    $michis=[
        array (
            "nombre" => "Mr. Michi",  
            "edad" => 5, 
            "ocupacion" => "Electrico", 
            "color" => "negro" , 
            "comidas" => array(
                "favoritas" => "Atun, lasaña", 
                "no agradables"=> "fresas, chocolate"
                ) 
            ),

        array (
            "nombre" => "Sr. Michi",  
            "edad" => 3, 
            "ocupacion" => "Vendedor de Sandias", 
            "color" =>  "blanco", 
            "comidas" => array(
                "favoritas" => "albondigas, sopa", 
                "o agradables"=> "Sandia, Cacahuates"
                ) 
            ),

        array (
            "nombre" => "Mtr. Michi", 
            "edad" => 10, 
            "ocupacion" => "Maestro", 
            "color" => "naranja", 
            "comidas" => array(
                "favoritas" => "coquita, pollito", 
                "no agradables"=> "naranja, platano"
                ) 
            ),

        array (
            "nombre" => "Lic. Michi", 
            "edad" => 6, 
            "ocupacion" => "Abogato", 
            "color" => "Cafe con blanco", 
            "comidas" => array(
                "favoritas" => "chilaquiles, pescado", 
                "no agradables"=> "huevo, mayonesa"
                ) 
            ),

        array (
            "nombre" => "Ing. Michi", 
            "edad" => 7, 
            "ocupacion" => "Ingeniero", 
            "color" => "Negro con blanco", 
            "comidas" => array(
                "favoritas" =>"Pizza, galletas", 
                "no agradables"=>"Jitomate, aguacate"
                ) 
                )

            ];

     //var_dump($michis);
     $michi= $michis[2];       
     echo "Las comidas favoritas de {$michi['nombre']} son {$michi['comidas']['favoritas']}"
?>