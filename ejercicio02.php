<?php
    function esPrimo($numero) {
        // Los números menores que 2 no son primos
        if ($numero < 2) {
            return false;
        }

        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                return false; // Si es divisible, no es primo
            }
        }

        return true; // Si no se encontraron divisores, es primo
    }

    // Ejemplo de uso
    $numero = 31;
    echo "El número $numero: " . (esPrimo($numero) ? "Es primo" : "No es primo") . "<br>";
?>
