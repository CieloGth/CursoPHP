<?php
    echo rand(1,10);
    echo "\n";
    
    function estudiante_legend($platzi_rank)
    {
        if($platzi_rank >= 20000){
            echo "Eres un estudiante Legend! \n";
        }
        else{
            echo "Lo sentimos, aun no eres estudiante Legend! \n";
        }
    }
    do{
        $puntos= (int) readline("¿Cual es la cantidad de puntos que tiene acumulados hasta ahora? ");
        estudiante_legend($puntos);
        echo "\n";
        echo "Para terminar presione Ctrl + C \n";
        echo "\n";

    } while(true);
    
    echo "\n";

?>