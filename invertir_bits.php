<?php
    //decbin convierte un numero decimal a numero binario
    $numero_binario = decbin($_POST["dato1"]);
    echo "Binario : $numero_binario <br />";
    //numero binario correctamente formateado para mostrarlo en 8bits
    $valor_formateado = sprintf("%08d", $numero_binario);
    echo "Binario con 8 bits : $valor_formateado <br />";
    //strrev invierte el string
    $invertido = strrev($valor_formateado);
    echo "Binario Invertido : $invertido <br />";
    //Devuelve el equivalente decimal del número binario
    $nuevo_decimal = bindec($invertido);
    echo "Nuevo Decimal: $nuevo_decimal <br />";
?>

<pre>
    <a href="index.php">Inicio</a>
</pre>