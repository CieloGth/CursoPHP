<?php
$words = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($words) ; $i++) { 
    $palabra =str_shuffle($words[$i]);
    $form .= "La palabra: ".$palabra."".
    "<input type='text' name='palabra$i'> ".
    "<br><hr>";
}



$boton = "<button type='submit'>Enviar</button>";
$cform ="</form>";

echo "\n\n";
echo $form.$boton.$cform;


?>