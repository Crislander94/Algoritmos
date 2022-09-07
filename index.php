<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos</title>
</head>
<body>
    <h3>Algoritmo Numeros primos</h3>
    <form action="n_numeros.php" method="post">
        <input type="text" name="dato1" onkeypress="ValidaSoloNumeros()" placeholder="ingresa un numero">
        <input type="submit" value="Probar">
    </form>

    <h3>Algoritmo Fibonacci</h3>
    <form action="fibonacci.php" method="post">
        <input type="text" name="dato1" onkeypress="ValidaSoloNumeros()" placeholder="ingresa un numero">
        <input type="submit" value="Probar">
    </form>

    <h3>Algoritmo Invertir Bits</h3>
    <form action="invertir_bits.php" method="post">
        <input type="text" name="dato1" onkeypress="ValidaSoloNumeros()" placeholder="ingresa un numero">
        <input type="submit" value="Probar">
    </form>
</body>
</html>

<script>
    // Validación de solo numeros
    function ValidaSoloNumeros() {
        //Verifica por codigo ASCII que el caracter ingresado sea numerico
        if ((event.keyCode < 48) || (event.keyCode > 57))
            event.returnValue = false;
    }
</script>