<?php
    $html= "<p><h1>GRAN LIQUIDACION</h1>
    <h1>35% DE DESCUEBTO EN TODA LA TIENDA</h1></p>
    <h3>VERIFIQUE SUS PRECIOS</h3>
        <label>
        ";
    $p=$_REQUEST["precio"];
    // $html+="La prenda cuesta ". $p."<br>";
    $d= $p*0.35;
    // $html+= "El descuento es de ". $d."<br>";
    $r=$p-$d;
    
    $html.="La prenda de $p tiene un descuento de $d y tendria un costo final de  $p<br>";
    
    $html.= "
    </label>";
echo $html;
$articulos=[
    array("nombre" => "mueble 1 ", "ancho" => 10,  "alto" => 110, "precio" => 100 ),
    array("nombre" => "mueble 2 ", "ancho" => 20,  "alto" => 10 , "precio" => 300 ),
    array("nombre" => "mueble 3 ", "ancho" => 30,  "alto" => 85 , "precio" => 500 ),
    array("nombre" => "mueble 4 ", "ancho" => 40,  "alto" => 250, "precio" => 900 ),
    array("nombre" => "mueble 5 ", "ancho" => 50,  "alto" => 200, "precio" => 600 ),
    array("nombre" => "mueble 6 ", "ancho" => 60,  "alto" => 80 , "precio" => 800 ),
    array("nombre" => "mueble 7 ", "ancho" => 70,  "alto" => 40 , "precio" => 700 ),
    array("nombre" => "mueble 8 ", "ancho" => 80,  "alto" => 30 , "precio" => 100 ),
    array("nombre" => "mueble 9 ", "ancho" => 90,  "alto" => 10 , "precio" => 600 ),
    array("nombre" => "mueble 10", "ancho" => 100, "alto" => 110, "precio" => 200 ),
    array("nombre" => "mueble 11", "ancho" => 110, "alto" => 120, "precio" => 800 ),
    array("nombre" => "mueble 12", "ancho" => 120, "alto" => 130, "precio" => 950 ),
    array("nombre" => "mueble 13", "ancho" => 130, "alto" => 140, "precio" => 650 ),
    array("nombre" => "mueble 14", "ancho" => 140, "alto" => 150, "precio" => 450 ),
    array("nombre" => "mueble 15", "ancho" => 150, "alto" => 100, "precio" => 550 ),
    array("nombre" => "mueble 16", "ancho" => 160, "alto" => 90 , "precio" => 950 ),
    array("nombre" => "mueble 17", "ancho" => 170, "alto" => 80 , "precio" => 840 ),
    array("nombre" => "mueble 18", "ancho" => 180, "alto" => 70 , "precio" => 460 ),
    array("nombre" => "mueble 19", "ancho" => 190, "alto" => 60 , "precio" => 120 ),
    array("nombre" => "mueble 20", "ancho" => 200, "alto" => 50 , "precio" => 358 ),
];
print_r($articulos);
for ($i=0; $i < count($articulos); $i++) { 
    echo" ".$articulos[$i]["nombre"]." ".$articulos[$i]["ancho"]." ".$articulos[$i]["alto"]." <br>";
}
$nombre= array();
for ($i=0; $i < count($articulos); $i++) { 
    $dato=$articulos[$i]["nombre"];
    array_push($nombre,$dato);
}
asort($nombre);
foreach ($nombre as $key => $val) {
   echo "$key = $val\n";
}

echo "\n\n\n";

$precio= array();
for ($i=0; $i < count($articulos); $i++) { 
    $dato=$articulos[$i]["precio"];
    #echo"$dato\n";
    array_push($precio,$dato);
    #echo"listo";
}
asort($precio);
#print_r($precio);
foreach ($precio as $key => $val) {
   echo "$key = $val\n";
}

echo "\n\n\n";

$ancho= array();
for ($i=0; $i < count($articulos); $i++) { 
    $dato=$articulos[$i]["ancho"];
    #echo"$dato\n";
    array_push($ancho,$dato);
    #echo"listo";
}
asort($ancho);
#print_r($precio);
foreach ($ancho as $key => $val) {
   echo "$key = $val\n";
}

echo "\n\n\n";

$alto= array();
for ($i=0; $i < count($articulos); $i++) { 
    $dato=$articulos[$i]["alto"];
    #echo"$dato\n";
    array_push($alto,$dato);
    #echo"listo";
}
asort($alto);
#print_r($precio);
foreach ($alto as $key => $val) {
   ech
?>