<?php
function esPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Ejemplo de uso
$numero = 2;
echo "¿El número $numero es primo? " . (esPrimo($numero) ? "Sí" : "No") . "<br>";
?>
