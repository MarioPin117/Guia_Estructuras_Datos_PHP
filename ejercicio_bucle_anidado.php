<?php
function piramideAsteriscos($filas) {
    echo "<pre>";

    for ($i = 1; $i <= $filas; $i++) {
        for ($j = $filas - $i; $j > 0; $j--) {
            echo " ";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "</pre>";
}

// Ejemplo de uso
piramideAsteriscos(5);
?>
