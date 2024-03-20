<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con Dos Números</title>
</head>
<body>
    <h2>Operaciones con Dos Números</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        
        if ($numero1 == $numero2) {
            $resultado = $numero1 * $numero2;
            echo "<p>Los números son iguales. El resultado de la multiplicación es: $resultado</p>";
        } elseif ($numero1 > $numero2) {
            $resultado = $numero1 - $numero2;
            echo "<p>El primer número es mayor que el segundo. El resultado de la resta es: $resultado</p>";
        } else {
            $resultado = $numero1 + $numero2;
            echo "<p>El primer número es menor que el segundo. El resultado de la suma es: $resultado</p>";
        }
    }
    ?>
</body>
</html>
