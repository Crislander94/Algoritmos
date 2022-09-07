<?php
    // Retorna true si el paramentro de entrada
    // es cuadrado perfecto
    function isPerfectSquare($num){
        $resp = (int)(sqrt($num));
        return ($resp * $resp == $num);
    }
    // verifica si es fibonacci
    function isFibonacci($n){
        // n es Fibonacci si es cumple
        // 5*n*n + 4 o 5*n*n - 4 
        // o son cuadrados perfectos
        return isPerfectSquare(5 * $n * $n + 4) ||
        isPerfectSquare(5 * $n * $n - 4);
    }


    //gitejecuto la funcion y muestro un mensaje
    echo isFibonacci($_POST["dato1"]) === true ? "Es un numero fibonacci" : "No es un numero fibonacci";

?>


<pre>
    <a href="index.php">Inicio</a>
</pre>