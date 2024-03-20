<!DOCTYPE html>
<html>
<head>
    <title>Generador de Números Aleatorios</title>
</head>
<body>
    <h2>Generador de Números Aleatorios</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cantidad">Cantidad de números:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <br><br>
        <label for="limite_min">Límite mínimo:</label>
        <input type="number" name="limite_min" id="limite_min" required>
        <br><br>
        <label for="limite_max">Límite máximo:</label>
        <input type="number" name="limite_max" id="limite_max" required>
        <br><br>
        <input type="checkbox" name="repetir" id="repetir" value="1">
        <label for="repetir">Permitir números repetidos</label>
        <br><br>
        <input type="submit" name="submit" value="Generar Números">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $limite_min = $_POST["limite_min"];
        $limite_max = $_POST["limite_max"];
        $repetir = isset($_POST["repetir"]) ? true : false;

        // Validar que el límite mínimo sea menor que el límite máximo
        if ($limite_min >= $limite_max) {
            echo "<p>El límite mínimo debe ser menor que el límite máximo.</p>";
            exit();
        }

        // Generar y mostrar los números aleatorios
        echo "<h3>Números Aleatorios Generados:</h3>";
        $numeros_generados = array();
        for ($i = 0; $i < $cantidad; $i++) {
            $numero = rand($limite_min, $limite_max);
            if (!$repetir) {
                // Si no se permiten números repetidos, verificar si el número ya ha sido generado
                while (in_array($numero, $numeros_generados)) {
                    $numero = rand($limite_min, $limite_max);
                }
            }
            echo "$numero ";
            $numeros_generados[] = $numero;
        }
    }
    ?>
</body>
</html>
