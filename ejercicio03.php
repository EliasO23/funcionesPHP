<?php
function esPalindromo($cadena) {
    $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $cadena)); // Elimina espacios y caracteres especiales
    return $cadena == strrev($cadena);
}

// Ejemplo de uso
$texto = "A man a plan a canal Panama";
echo "¿El texto '$texto' es un palíndromo? " . (esPalindromo($texto) ? "Sí" : "No") . "\n";
?>
