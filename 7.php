<!DOCTYPE html>
<html>
<head>
    <title>Secuencia de Fibonacci</title>
</head>
<body>
    <h2>Secuencia de Fibonacci</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="tamanio">Tamaño de la secuencia:</label>
        <input type="number" name="tamanio" id="tamanio" required>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tamanio = $_POST["tamanio"];

        // Validar que el tamaño ingresado sea un número positivo
        if ($tamanio > 0) {
            // Calcular y mostrar la secuencia de Fibonacci
            $a = 0;
            $b = 1;
            echo "<h3>Secuencia de Fibonacci:</h3>";
            echo "$a $b ";
            for ($i = 2; $i < $tamanio; $i++) {
                $c = $a + $b;
                echo "$c ";
                $a = $b;
                $b = $c;
            }
        } else {
            echo "<p>Por favor, ingrese un número positivo para calcular la secuencia de Fibonacci.</p>";
        }
    }
    ?>
</body>
</html>
