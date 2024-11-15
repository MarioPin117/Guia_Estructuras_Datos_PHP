<?php
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        $encontrado = false;
        
        foreach ($frecuencia as $key => $value) {
            if ($key === $caracter) {
                $frecuencia[$key]++; 
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

// Ejemplo de uso
$texto = "programacion";
$resultado = frecuenciaCaracteres($texto);
print_r($resultado);
?>