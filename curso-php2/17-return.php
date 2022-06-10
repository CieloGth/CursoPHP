<?php
    function yo(){
        $numero_al= rand(1,8);
        $frase="";
        switch ($numero_al) {
            case 1:
                $frase = "No busques los errores, busca un remedio \n";
                break;
            case 2:
                $frase = "Si te caíste ayer, levántate hoy \n";
                break;
            case 3:
                $frase = "No dejes que el miedo se interponga en tu camino \n";
                break;
            case 4:
                $frase = "El valor de una idea radica en su uso \n";
                break;
            case 5:
                $frase = "Haz de cada día tu obra maestra \n";
                break;
            case 6:
                $frase = "La vida es una aventura, atrévete \n";
                break;
            case 7:
                $frase = "Siempre parece imposible... hasta que se hace \n";
                break;
            case 8:
                $frase = "El mejor momento del día es ahora \n";
                break;
        }
        return $frase;
    }
    yo();
    echo yo();
    
    echo "\n";
?>