<?php 
    //$asientos_disponibles=4;
    $asientos_disponibles=0;
    //$es_su_hijo = true;
    $es_su_hijo = false;
    //$es_un_hermano = true;
    $es_un_hermano = false;

    if($asientos_disponibles > 0){
        echo "Puedes ver la pelicula \n";
    }
    else if($es_su_hijo==true){
        echo "Jajajaja si como no, pero puedes ver la pelicula \n";
    }
    else if($es_un_hermano==true){
        echo "No te creo, pero bueno puedes ver la pelicula \n";
    }
    else{
        echo "no puedes ver la pelicula \n";
    }
?>