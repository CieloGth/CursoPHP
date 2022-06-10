<?php 

    //reto clase 15
    $un_michi_que_es_grande = true;
    $un_michi_que_le_gusta_comer = true;
    $un_michi_que_sabe_volar = false;
    $un_michi_que_tiene_2_patas = false;

    var_dump($un_michi_que_es_grande && $un_michi_que_le_gusta_comer); 
    echo "\n"; 
    var_dump($un_michi_que_es_grande || $un_michi_que_le_gusta_comer); 
    echo "\n"; 
    var_dump($un_michi_que_sabe_volar || $un_michi_que_tiene_2_patas); 
    echo "\n"; 
    var_dump(!$un_michi_que_le_gusta_comer); 
    echo "\n"; 
    var_dump(!$un_michi_que_le_gusta_comer || $un_michi_que_es_grande); 
    echo "\n"; 


?>