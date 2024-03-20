<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Unidades de Peso</title>
</head>
<body>
    <h2>Conversor de Unidades de Peso</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <br><br>
        <label for="desde">Desde:</label>
        <select name="desde" id="desde">
            <option value="onzas">Onzas</option>
            <option value="libras">Libras</option>
            <option value="kilogramos">Kilogramos</option>
        </select>
        <br><br>
        <label for="hacia">Hacia:</label>
        <select name="hacia" id="hacia">
            <option value="onzas">Onzas</option>
            <option value="libras">Libras</option>
            <option value="kilogramos">Kilogramos</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $desde = $_POST["desde"];
        $hacia = $_POST["hacia"];

        // Realizar la conversión
        switch ($desde) {
            case 'onzas':
                $resultado = convertirOnzas($cantidad, $hacia);
                break;
            case 'libras':
                $resultado = convertirLibras($cantidad, $hacia);
                break;
            case 'kilogramos':
                $resultado = convertirKilogramos($cantidad, $hacia);
                break;
            default:
                $resultado = "Error: Unidad no válida.";
                break;
        }

        // Mostrar el resultado
        echo "<p>Resultado de la conversión: $resultado</p>";
    }

    function convertirOnzas($cantidad, $unidad) {
        switch ($unidad) {
            case 'onzas':
                return $cantidad;
            case 'libras':
                return $cantidad * 0.0625;
            case 'kilogramos':
                return $cantidad * 0.0283495;
            default:
                return "Error: Unidad no válida.";
        }
    }

    function convertirLibras($cantidad, $unidad) {
        switch ($unidad) {
            case 'onzas':
                return $cantidad * 16;
            case 'libras':
                return $cantidad;
            case 'kilogramos':
                return $cantidad * 0.453592;
            default:
                return "Error: Unidad no válida.";
        }
    }

    function convertirKilogramos($cantidad, $unidad) {
        switch ($unidad) {
            case 'onzas':
                return $cantidad * 35.274;
            case 'libras':
                return $cantidad * 2.20462;
            case 'kilogramos':
                return $cantidad;
            default:
                return "Error: Unidad no válida.";
        }
    }
    ?>
</body>
</html>
