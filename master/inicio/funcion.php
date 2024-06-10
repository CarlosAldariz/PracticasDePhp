<?php 


function encontrarMaximo($numeros) {  
    $max = 0;
    for ($i = 0; $i < count($numeros); $i++) { 
        if ($max < $numeros[$i]) { 
            $max = $numeros[$i];
        } 
    }  
    return $max;
}  

$numeros = [ 1, 2, 3, 4, 5, 6]; 

echo encontrarMaximo($numeros);





?>