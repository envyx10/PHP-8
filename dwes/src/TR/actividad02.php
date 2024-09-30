<!--
2. 
Crea un script php y define en el una constante llamada IVA con el valor 0.21 
y una variable precio con el valor 100. Calcula el precio total y muestra el resultado.
-->

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 02</title>

</head>
<body>

<?php

const IVA = 0.21;

$precio = 100;
$precio_total = $precio + ($precio * IVA);

echo "El precio total es de $precio_total ";

?>