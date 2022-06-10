<?php
$words = array("sol", "luna", "cielo",
//  "estrellas", "mar", "playas", "ornitorinco"
);
$desordenadas = array();

foreach ($words as $palabra) {
    $letras = str_shuffle($palabra);
    array_push($desordenadas, $letras);
}
// var_dump($words);
// var_dump($desordenadas);

echo "\n\n";


?>