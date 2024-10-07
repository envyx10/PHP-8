<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>



<?php 

/* 

Escribe un script PHP y crea una variable con un número flotante, conviértela
a un entero y luego a cadena. Muestra el tipo de dato en cada paso utilizando la funcion gettype(). 

*/

$foo = 3.14;
echo gettype($foo);
settype($foo, "integer"); 
echo "<br>";
echo gettype($foo)

?>
    
</body>
</html>