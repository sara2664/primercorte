<?php

$numero = rand(1, 10);

function numero_a_letras($numero) {
    $numeros_letras = [
        1 => 'Uno/One',
        2 => 'Dos/Two',
        3 => 'Tres/Three',
        4 => 'Cuatro/Four',
        5 => 'Cinco/Five',
        6 => 'Seis/Six',
        7 => 'Siete/Seven',
        8 => 'Ocho/Eight',
        9 => 'Nueve/Nine',
        10 => 'Diez/Ten'
    ];

    return $numeros_letras[$numero];
}

echo "Número : " . $numero . " (" . numero_a_letras($numero) . ")";
?>
