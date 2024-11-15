<?php
    function generarFibonacci($n) {
        if ($n >= 0) {
            $fibonacci[]= 0;  
        }

        if ($n >= 1) {
            $fibonacci[] = 1;  
        }
        
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        
        return array_slice($fibonacci, 0, $n);
    }


    $n = 10;
    echo "Los primeros $n términos de la serie Fibonacci son: <br>"; 
    echo implode(", ", generarFibonacci($n)) . "<br>";
?>
