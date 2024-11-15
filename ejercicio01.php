<?php
    function generarFibonacci($n) {
        $fibonacci = [0, 1];  //Inicia la serie con 0 y 1
        
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        
        return array_slice($fibonacci, 0, $n);
    }


    $n = 20;
    echo "Los primeros $n términos de la serie Fibonacci son: <br>"; 
    echo implode(", ", generarFibonacci($n)) . "<br>";
?>
