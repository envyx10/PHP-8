<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 14</title>
</head>
<body>


<?php 


/* 
Escribe un script PHP donde definas un array multidimensional llamado
$clases que contenga dos arrays, uno con los nombres de los proesores y otro con los cursos
que impartes.


Los profesores son Pedro Pérez y GemaGómez
Los cursos son Biología y Química

----

Cambia el nombre del primer curso de Física en el array $clases

*/


$clases = [

    ["Profesores" => ["Pedro Pérez" , "Gema Gómez" ]],
    ["Cursos" =>     ["Biologia" ,"Quimica"]]
    
    
    ] ;

$clases["Cursos"][0] = "Física";

print_r ($clases);

?>


    
</body>
</html>