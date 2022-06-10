<?php
    $pre_cafe=[90,60,50,62,12,84,62,47,31];

    usort($pre_cafe, function($a, $b){
        return $a<=> $b;
    });
    var_dump($pre_cafe);
    echo "\n";
?>