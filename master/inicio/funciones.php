<?php 
function calcularPromedio($numeros) {
    $suma = 0; 
    

    for ($i = 0; $i < count($numeros); $i++) {
        $suma += $numeros[$i]; 
    }
    
 
    if (count($numeros) > 0) {
        $promedio = $suma / count($numeros);
    } else {
        $promedio = 0; 
    }
    echo $promedio; 
  
} 

$numeros = [1,2,3,4,5,6]; 

calcularPromedio($numeros);

?>