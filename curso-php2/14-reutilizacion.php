<?php
    function get_pokemon(){
        $numero_aleatorio = rand(1,20);
        
        switch ($numero_aleatorio){
            case 1:  echo "El numero $numero_aleatorio tiene como pokemon para ti Pikachu";    echo "\n"; break;
            case 2:  echo "El numero $numero_aleatorio tiene como pokemon para ti Charmander"; echo "\n"; break;
            case 3:  echo "El numero $numero_aleatorio tiene como pokemon para ti Mewtwo";     echo "\n"; break;
            case 4:  echo "El numero $numero_aleatorio tiene como pokemon para ti Bulbasur";   echo "\n"; break;
            case 5:  echo "El numero $numero_aleatorio tiene como pokemon para ti Charizard";  echo "\n"; break;
            case 6:  echo "El numero $numero_aleatorio tiene como pokemon para ti Squirtle";   echo "\n"; break;
            case 7:  echo "El numero $numero_aleatorio tiene como pokemon para ti Eevee";      echo "\n"; break;
            case 8:  echo "El numero $numero_aleatorio tiene como pokemon para ti Ralts";      echo "\n"; break;
            case 9:  echo "El numero $numero_aleatorio tiene como pokemon para ti Aipom";      echo "\n"; break;
            case 10: echo "El numero $numero_aleatorio tiene como pokemon para ti Castform";   echo "\n"; break;
            case 11: echo "El numero $numero_aleatorio tiene como pokemon para ti Rapidash";   echo "\n"; break;
            case 12: echo "El numero $numero_aleatorio tiene como pokemon para ti Nickit";     echo "\n"; break;
            case 13: echo "El numero $numero_aleatorio tiene como pokemon para ti Arcanine";   echo "\n"; break;
            case 14: echo "El numero $numero_aleatorio tiene como pokemon para ti Zekrom";     echo "\n"; break;
            case 15: echo "El numero $numero_aleatorio tiene como pokemon para ti Cinccino";   echo "\n"; break;
            default: echo "Lo siento el numero $numero_aleatorio , no tiene pokemones para ti :c \n";    
        }
    }

    for ($i=0; $i < 25; $i++) { 
        get_pokemon();
    }

    echo "\n";

?>