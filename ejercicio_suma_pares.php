<?php
function sumarNumerosPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6];
$resultado = sumarNumerosPares($numeros);
echo "Suma de números pares: $resultado";
?>