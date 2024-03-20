<!DOCTYPE html>
<html>
<head>
    <title>Promedio de cinco números</title>
</head>
<body>
    <h2>Calcular promedio de cinco números</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
        // Definir un array para almacenar los cinco números
        $numeros = array();

        // Mostrar cinco campos de entrada para que el usuario ingrese los números
        for ($i = 1; $i <= 5; $i++) {
            echo "<label for='num{$i}'>Número {$i}:</label>";
            echo "<input type='number' name='num{$i}' id='num{$i}' required>";
            echo "<br><br>";
        }
        ?>
        <input type="submit" name="submit" value="Calcular promedio">
    </form>

    <?php
    // Si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sumar los cinco números ingresados por el usuario
        $suma = 0;
        for ($i = 1; $i <= 5; $i++) {
            $numero = $_POST["num{$i}"];
            $suma += $numero;
        }

        // Calcular el promedio
        $promedio = $suma / 5;

        // Mostrar el resultado
        echo "<h3>El promedio de los cinco números es: $promedio</h3>";
    }
    ?>
</body>
</html>
