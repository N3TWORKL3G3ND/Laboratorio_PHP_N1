<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
<h2>Calculadora PHP</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los números ingresados por el usuario
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Realiza las operaciones matemáticas
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = ($num2 != 0) ? $num1 / $num2 : "No se puede dividir por cero";

    // Muestra los resultados
    echo "<h3>Resultados:</h3>";
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multiplicacion <br>";
    echo "División: $division <br>";
}
?>


</body>
</html>