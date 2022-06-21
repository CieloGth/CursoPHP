<?php
    //  print_r($_REQUEST);
    $words = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");

    for ($i=0; $i < count($words) ; $i++) { 
       if($_REQUEST["palabra$i"]==$words[$i]){
        echo "La palabra ingresada es correcta <br><hr>";
        }else{
            echo "La palabra ingresada es incorrecta <br>";
            echo "La palabra correcta es: ".$words[$i]."<br><hr>";
        }
    }

    // if($_REQUEST["posicion0"]==$words[0]){
    //     echo "La palabra ingresada es correcta <br>";
    // }else{
    //     echo "La palabra ingresada es incorrecta <br>";
    //     echo "La palabra correcta es: ".$words[0];
    // }
    // if($_REQUEST["posicion1"]==$words[1]){
    //     echo "La palabra ingresada es correcta <br>";
    // }else{
    //     echo "La palabra ingresada es incorrecta <br>";
    //     echo "La palabra correcta es: ".$words[1];
    // }
    // if($_REQUEST["posicion2"]==$words[2]){
    //     echo "La palabra ingresada es correcta <br>";
    // }else{
    //     echo "La palabra ingresada es incorrecta <br>";
    //     echo "La palabra correcta es: ".$words[2];
    // }
?>