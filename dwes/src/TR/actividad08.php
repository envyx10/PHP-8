<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<body>
    
<?php 

/* 

Crea un script  PHP y define una variable booleana que indique si una persona es
mayor de edad ( true o false) . Define otra varaible que contenga el nombre de un
país y, seguidamente, utilizando un operador lógico verifica si la persona es mayor de edad
y vive en España. 

Muestra un mensaje indicando si cumple ambas condiciones.

AYUDA : Como php no muestra en pantalla el valor false, se podrá utilizar la funcion
var_export para mostrar los valores booleanos en pantalla.


*/

$esMayor = 0;
$edad = 29;
$pais = "España";

if( $edad >= 18 ){
    $esMayor = 1;
} else {
    $esMayor = 0;
}

if( $esMayor && $pais == "España") {
    $esMayor = 1;
    echo "Usted es mayor de edad y vive $pais";

} else {

    echo "Usted es menor de edad" ;
}










?>










</body>
</html>