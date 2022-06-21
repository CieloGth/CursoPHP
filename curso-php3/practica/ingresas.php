<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

    <script src="https://kit.fontawesome.com/b57319cb40.js" crossorigin="anonymous"></script>


    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./index.js"></script> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <p>
        <h1>GRAN LIQUIDACION</h1>
        <h1>35% DE DESCUEBTO EN TODA LA TIENDA</h1>
    </p>
    <h3>VERIFIQUE SUS PRECIOS</h3>
    <form action='action.php'>
        <input type='text' name='precio'>
        <button type='submit'>Enviar</button>
        <p></p>
    </form>
    <hr>
    <p>
        <h1>ARTICULOS</h1>
    </p>
        <form action='action.php'>
            <h3>los articulos son:</h3>
            <label>
                <?php
                    $articulos=[
                        array("nombre" => "mueble 1 ", "ancho" => 10,  "alto" => 110),
                        array("nombre" => "mueble 2 ", "ancho" => 20,  "alto" => 10),
                        array("nombre" => "mueble 3 ", "ancho" => 30,  "alto" => 85),
                        array("nombre" => "mueble 4 ", "ancho" => 40,  "alto" => 250),
                        array("nombre" => "mueble 5 ", "ancho" => 50,  "alto" => 200),
                        array("nombre" => "mueble 6 ", "ancho" => 60,  "alto" => 80),
                        array("nombre" => "mueble 7 ", "ancho" => 70,  "alto" => 40),
                        array("nombre" => "mueble 8 ", "ancho" => 80,  "alto" => 30),
                        array("nombre" => "mueble 9 ", "ancho" => 90,  "alto" => 10),
                        array("nombre" => "mueble 10", "ancho" => 100, "alto" => 110),
                        array("nombre" => "mueble 11", "ancho" => 110, "alto" => 120),
                        array("nombre" => "mueble 12", "ancho" => 120, "alto" => 130),
                        array("nombre" => "mueble 13", "ancho" => 130, "alto" => 140),
                        array("nombre" => "mueble 14", "ancho" => 140, "alto" => 150),
                        array("nombre" => "mueble 15", "ancho" => 150, "alto" => 100),
                        array("nombre" => "mueble 16", "ancho" => 160, "alto" => 90),
                        array("nombre" => "mueble 17", "ancho" => 170, "alto" => 80),
                        array("nombre" => "mueble 18", "ancho" => 180, "alto" => 70),
                        array("nombre" => "mueble 19", "ancho" => 190, "alto" => 60),
                        array("nombre" => "mueble 20", "ancho" => 200, "alto" => 50),
                    ];
                ?>
            </label>
            <button type='submit'>filtrar por precio</button>
            <button type='submit'>filtrar por ancho</button>
            <button type='submit'>filtrar por precio</button>
            <button type='submit'>filtrar por alto</button>
            <button type='submit'>filtrar por nombre</button>
        </form>

<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="openCity('Nombre')">Nombre</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Precio')">Precio</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Ancho')">Ancho</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Alto')">Alto</button>
</div>

<div id="Nombre" class="w3-container city">
  <?php
  print_r(($articulos))?>
</div>

<div id="Precio" class="w3-container city" style="display:none">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Ancho" class="w3-container city" style="display:none">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Alto" class="w3-container city" style="display:none">
  <h2>Tokyo2</h2>
  <p>Tokyo is the capital of Japan2.</p>
</div>

        <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
</body>
</html>