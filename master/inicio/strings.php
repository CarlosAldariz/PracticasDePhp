<?php
// Ejercicio 1: Combinar strings usando (.)
$nombre = "José ";
$apellidos = 'Montoya';

$nombreCompleto = $nombre. $apellidos;

// Ejercicio 2: Concatenar diferentes tipos de variables
$calificacion = 9;
$mayorEdad = true;

$infoUsuario = "El usuario: ". $nombreCompleto. ", tiene una calificación de: ". $calificacion. " y es mayor de edad: ". $mayorEdad;

/* 
Ejercicio 4: Funciones para trabajar con cadenas
*/
$frase = "Hola mundo!";
$fraseMayusculas = strtoupper($frase);
$fraseMinusculas = strtolower($frase);
$frasePrimeraMayuscula = ucfirst($frase);
$frasePrimeraMayusculaCadaPalabra = ucwords($frase);

echo "Frase original: ". $frase. "\n";
echo "Frase en mayúsculas: ". $fraseMayusculas. "\n";
echo "Frase en minúsculas: ". $fraseMinusculas. "\n";
echo "Frase con primera letra en mayúscula: ". $frasePrimeraMayuscula. "\n";
echo "Frase con primera letra de cada palabra en mayúscula: ". $frasePrimeraMayusculaCadaPalabra. "\n";
?>