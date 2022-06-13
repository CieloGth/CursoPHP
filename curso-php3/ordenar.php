<?php
                        //Juego en Codigo 
    echo "\n\n";
    
    $words = array(
        "sol", 
        "luna", 
        "cielo", 
        "estrellas", 
        "mar",
        "pie", 
        "Arenera", 
        "DESPACHURRAMIENTO", 
        "nariz", 
        "DESBARRIGARIAMOS", 
        "VERDURA", 
        "arañara", 
        "fruta", 
        "VELO", 
        "talon", 
        "FANFARRONEABAMOS", 
        "rallar", 
        "GEMELOS", 
        "oso", 
        "PALABRERIA",
        "Radar", 
        "calzado", 
        "ULTRADERECHISTAS", 
        "oro", 
        "Reconocer", 
        "ULTIMADAS", 
        "PACHANGUEARIAMOS", 
        "SUBALTERNANDO", 
        "Sometemos", 
        "VULNERARIO", 
        "Australopitecos", 
        "ZODIACAL", 
        "cabildeo", 
        "centavos", 
        "IRREPROCHABILIDAD", 
        "playas", 
        "ornitorinco", 
        "Ahorcado",
        "Paralelepipedo",
        "Desoxirribonucleico",
        "Caleidoscopio",
        "Electrocardiograma",
        "Electroencefalografia",
        "Asteroides",
        "Electroencefalografista",
        "Institucionalizacion",
        "Antihistaminico",
        "Idiosincrasia",
        "Metacrilato",
        "Esparadrapo",
        "Dimetilnitrosamina",
        "Transustanciacion"
    );
    $n_facil=array();
    
    $n_medio=array();

    $n_dificil=array();

    foreach ($words as $palabra) {
        $numero_letras=strlen($palabra);
        if($numero_letras <= 7){
            array_push($n_facil, $palabra);
        }
        else if($numero_letras <=15 ){
            array_push($n_medio, $palabra);
        }
        else{
            array_push($n_dificil, $palabra);
        }
    }
    
    function juego ($arr , $o){
        $r= count($arr) - 1;
        // echo($r);

        $arrjuego = array();
        $np=0;
        do{
            $p= $arr[rand(0,$r)];
            $p = strtolower($p);

            if (!in_array($p, $arrjuego)) {
                array_push($arrjuego, $p); 
            $np++;
            }
        }
        while($np<10);

        // var_dump($arrjuego);

        $desordenar = array();
            foreach ($arrjuego as $pa) {
                $pa_des = str_shuffle($pa);
                array_push($desordenar, $pa_des);
            }
        // var_dump($desordenar);
        $a=0;
        $oportunidades=$o;
        echo "Tienes $o oportuidades para consegir las 10 palabras del juego \n\n";
        sleep(2);
        echo "¿Crees conseguirlo? \n\n";
        sleep(2);
        echo "Empezemos \n\n";

        do {
           $palabrab=$desordenar[$a];
           $juega = readline("La palabra a descrubrir es $palabrab ");
           if($juega === $arrjuego[$a]){
            echo "\n\n Bien hecho \n\n";
            sleep(1);
            $a++;
           }
           else{
            $oportunidades--;
            if($oportunidades>0){
               echo "\n\n te quedan $oportunidades \n\n";
               sleep(3);
            }
            else{
                echo " \n\n Ya no tienes oportunidades\n \n";
                sleep(3);
                echo "La palabra era $arrjuego[$a]\n \n";
                sleep(4);

                
            }

           }
        }
        while($a<10 && $oportunidades>0);


    }

    echo "Iniciemos \n\n";
    // $juego = strtolower(readline( "¿Palabras definidas? y/n "));
    // if ($juego === "y"){
        // echo "\n\n";
        echo "Niveles de juego \n\n";
        echo "1 - Facil  con letras entre 2-7 letras \n";
        echo "2 - Medio  con letras entre 8-15 letras \n";
        echo "3 - Dificil con letras de mas de 15 letras \n";
        echo "4 - De todo tamaño \n\n";
        $nivel= readline("¿En que nivel quiere jugar? ") ;
            switch ($nivel) {
                case 1:
                    juego($n_facil, 5);
                    break;
                case 2:
                    juego($n_medio, 7);
                    break;
                case 3:
                    juego($n_dificil, 10);
                    break;
                case 4:
                    juego($words, rand(5,10));
                    break;
                default:
                echo "No existe";
                    break;
            }
    // }
    // else {
    //     $nuevas = readline( "¿Desea agregar nuevas palabras? y/n ");
    //  if ($juego === "y"){
        //  }
    //     else {
             echo "Fin del juego";

    //     }
    // }
    
    
    
?>