<?php

// Genera un número aleatorio entre 1 y 100
$numAleatorio = rand(1, 100);

// Determina si el número es par o impar
if ($numAleatorio % 2 == 0) {
    $resultado = "par";
} else {
    $resultado = "impar";
}

// Muestra el resultado
echo "El número aleatorio es: $numAleatorio\n";
echo "El número $numAleatorio es $resultado\n";

?>