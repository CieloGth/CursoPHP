<?php

    function obtener_fecha(){
        return date('l j M Y');
    }
    function obtener_hora(){
        return date('h:i:s a');
    }
    echo "¡Hola!, ¿Me podrias decir que hora es? \n";
    echo "¡Claro!, Hoy es ".obtener_fecha()." y son las ". obtener_hora()."\n";
    echo "\n";
?>