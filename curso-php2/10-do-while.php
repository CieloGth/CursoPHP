<?php 
    # se ejecuta una vez sin importar si es true o false la condicion
    do{
        echo "esto se ejecuta una vez minimo \n";
    } 
    while(false);

    // do{
    //     echo "esto se ejecuta una vez minimo \n";
    //     echo "para detenerlo Ctrl + C \n";

    // } 
    // while(true);

    $names = ["Cielo", "Pepito", "Mr. Michi"];
    do{
        $user = readline("Ingresa tu nuevo nombre de usuario: ");
        echo "\n";
    } 
    while(in_array($user, $names));

?>
