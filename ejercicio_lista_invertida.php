<?php
function invertirLista($array) {
    $invertido = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $invertido[] = $array[$i];
    }
    return $invertido;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5];
echo "Array original: " . implode(" - ",$numeros) . "<br>";

$resultado = invertirLista($numeros);
echo "Array invertido: " . implode(" - ", $resultado);
?>