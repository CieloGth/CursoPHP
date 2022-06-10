<?php
    $words = array(
        "sol", "luna", "cielo", "estrellas", "mar","pie", "Arenera", "DESPACHURRAMIENTO", "nariz", "DESBARRIGARIAMOS", "VERDURA", "arañara", "fruta", "VELO", "talon", "FANFARRONEABAMOS", "rallar", "GEMELA", "oso", "PALABRERIA", "Radar", "calzado", "ULTRADERECHISTAS", "oro", "Reconocer", "ULTIMADAS", "PACHANGUEARIAMOS", "SUBALTERNANDO", "Sometemos", "VULNERARIO", "Australopitecos", "ZODIACAL", "cabildeo", "centavos", "IRREPROCHABILIDAD", "playas", "ornitorinco", "Ahorcado","Paralelepípedo","Paralelepípedo","Desoxirribonucleico","Caleidoscopio","Electrocardiograma","Electroencefalografía","Asteroides","Electroencefalografista","Institucionalización","Antihistamínico","Idiosincrasia","Metacrilato","Esparadrapo","Dimetilnitrosamina","Transustanciacion"
    );
    echo "\n\n";
    echo "Iniciemos \n\n";
    $juego = strtolower(readline( "¿Palabras definidas? y/n "));
    if ($juego === "y"){
        echo "\n\n";
        echo "Niveles de juego \n\n";
        echo "1 - Facil  con letras entre 2-7 letras \n";
        echo "2 - Medio  con letras entre 8-15 letras \n";
        echo "3 - Dificil con letras de mas de 15 letras \n\n";
        echo "4 - De todo tamaño \n\n";
        $nivel= readline("¿En que nivel quiere jugar? ") ;
        juego($nivel);
    }
    else {
        //nuevas();    
        $nuevas = readline( "¿Desea agregar nuevas palabras? y/n ");

    }

    var_dump($words);
    
    //function juego ($nivel_r){
        
        switch($nivel_r){
            case 1:
                
                break;
            case 2:  break;
            case 3:  break;
            default: echo "No es una opcion";
    
        }
    //}
?>