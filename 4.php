<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AreaDelCirculo</title>
</head>
<body>
    
<?php

$radio = 25;
$pi = 3.14159;

echo "AREA = PI x radio^2<br>";
echo "AREA = " . $pi . " x " . $radio . " ^2<br>";
echo "AREA = " . $pi * pow($radio,2);

?>


</body>
</html>