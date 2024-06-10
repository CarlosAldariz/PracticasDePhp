<?php 

$numero = 12345; 

$sumaDigitos = 0; 

do { 
    $digito = $numero % 10; 

    $sumaDigitos += $digito; 

    $numero = intdiv($numero, 10); 

} while ($numero > 0); 

echo $sumaDigitos;


?>