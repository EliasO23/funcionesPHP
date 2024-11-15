<?php
    function esPalindromo($cadena) {
        // Convertir a minúsculas y eliminar caracteres especiales
        $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $cadena));
        
        $longitud = strlen($cadena);
        
        for ($i = 0; $i < $longitud / 2; $i++) {
            if ($cadena[$i] != $cadena[$longitud - $i - 1]) {
                return false; // Si hay alguna diferencia, no es un palíndromo
            }
        }
        
        return true; // Si el bucle termina sin diferencias, es un palíndromo
    }

    $texto = "La ruta natural";
    echo "El texto '$texto': <br>" . (esPalindromo($texto) ? " - Es un Palindromo" : " - No es un Palindromo") . "<br>";
?>
