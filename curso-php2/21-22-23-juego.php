<?php
    echo "\n\n";
    function clear(){
        // $sistema =  PHP_OS 
        if(PHP_OS === "WINNT"){
            system("cls");
            echo "Borra";

        }
        else{
            system("clear");
            echo "Borrar";
        }
    }
    $palabras = [
        "Ahorcado",
        "Paralelepípedo",
        "Paralelepípedo",
        "Desoxirribonucleico",
        "Caleidoscopio",
        "Electrocardiograma",
        "Electroencefalografía",
        "Asteroides",
        "Electroencefalografista ",
        "Institucionalización",
        "Antihistamínico",
        "Idiosincrasia",
        "Metacrilato",
        "Esparadrapo",
        "Dimetilnitrosamina",
        "Transustanciacion"
    ];

    define("MAX_ATTEMPS", 6);
    echo "¡Juego del ahorcado! \n \n";

    //inicializa juego

    //$word = "oso";
    $word = $palabras[rand(0,15)]; #elige palabra
    #echo $word ."\n";


    $word=strtolower($word); #minusculas
    $word_length=strlen($word); #numero de letras
    $descubre = str_pad("", $word_length, "_"); #espacios
    #echo $descubre;
    $attemps=0; #intentos

    do{
        echo "Palabra de $word_length letras \n\n";
        echo $descubre . "\n \n";
        
        //pedimos que escriba su letra
        $palabra_juego = readline("Escribe una letra: ");
        $palabra_juego = strtolower($palabra_juego);
        #echo $palabra_juego;
        #str_contains() => para ver si exixte dentro de un string
        if(str_contains($word, $palabra_juego)){
            
            //verificar cunatas veces aparece la letra
            $offset=0;
            while(
                ($posicion = strpos($word, $palabra_juego, $offset))
                !== false
                ){
                $descubre[$posicion] = $palabra_juego;
                $offset = $posicion + 1;
            }
        }
        else{
            #clear();
            $attemps++;
            echo "letra incorrecta, te quedan ". (MAX_ATTEMPS - $attemps);
            sleep(2);
        }
        #clear();
        echo "\n\n";
        
    } while($attemps < MAX_ATTEMPS && $descubre != $word);
    #clear();
    if ($attemps < MAX_ATTEMPS){
        echo " ¡Felicidades! has adivinado la palabra :3 <3 \n\n";
        echo "La palabra si era ' $word ' \n\n";

    }
    else{
        echo " Suerte para la proxima";
        echo "la palabra era $word \n\n";
        echo "Tu descubriste $descubre";
    }
        
    
    echo "\n\n";
?>