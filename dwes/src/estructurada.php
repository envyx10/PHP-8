<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Estructurada</title>
</head>
<body>


<?php 


$edad = 18;
#Sentencia de selecion: IF
if($edad >= 18) {
    echo "Eres mayor de edad <br/>";
}
else {
    echo "Eres menor de edad";
}

#otro metodo de if
if($edad >= 18):
    echo "Eres mayor de edad <br/>";
else:
    echo "Eres menor de edad";
endif;

#Operador Elvis
echo ($edad >= 18) ? "Eres mayor de edad <br/>" : "Eres menor de edad <br/>";

echo "<h4>SWITCH</h4>" ;
echo "<hr>" ;
#SWITCH
$opcion = 14;
switch($opcion){

    case 1: echo "El valor es UNO  <br/>"   ;
        break; 
    case 2: echo "El valor es DOS  <br/>"   ;
        break;
    case 3: echo "El valor es TRES <br/>"   ;
        break;
    case 4: echo "El valor es CUATRO <br/>" ;
        break;
    case 5: echo "El valor es CINCO <br/>"  ;
        break;
    case 6: echo "El valor es SEIS <br/>"   ;
        break;
    case 7: echo "El valor es SIETE <br/>"  ;
        break;
    case 8: echo "El valor es OCHO <br/>"   ;
        break;
    case 9: echo "El valor es NUEVE <br/>"  ;
        break;
    case 0: echo "El valor es CERO <br/>"   ;
        break;
    default:
        echo "Opcion por defecto <br/>";

}

#Opcion 2
$opcion = 14;
switch($opcion):

    case 1 : echo "El valor es UNO <br/>" ;
        break;
    case 2 : echo "El valor es DOS <br/>" ;
        break;
    default:
        echo "Opcion por defecto <br/>";

endswitch;

# Sentencia de seleccion match
# Funciona como una expresion
# cada rama sólo acepta una instruccion
# Si no hay una rama dfault que verifique el predicado provoca una excepción

echo "<h4>MATCH</h4>" ;
echo "<hr>" ;

    $dia= 6 ;
    echo match($dia){

        1,2,3,4,5 => " Dia laborable     <br/>" ,
        6,7       => " Fin de de semana  <br/>" ,
        default   => " Valor por defecto <br/>"

    };


echo "<h4>WHILE</h4>" ;
echo "<hr>" ;
# Sentencias de iteracion: WHILE
$i = 1;
while ($i <= 10):
    echo "$i";
    $i++;
endwhile;

echo "<h4>DO WHILE</h4>" ;
echo "<hr>" ;

# Sentencias de iteracion: DO ... WHILE
$i = 1 ;
do {
    echo "$i";
    $i++;
} while ($i <= 50 ) ;

echo "<h4>FOR</h4>" ;
echo "<hr>" ;

# Sentencia FOR 

/* for($i=1 ; $i <=50 ; $i++) {
    echo "$i ";
} */

# Tambien se puede hacer asi  - Si solo tiene una instruccion se puede omitir {}

/* for($i=1 ; $i <=50 ; $i++) echo "$i "; */

# O tambien asi ( tiene que tener esta estructura o nanai )
for($i=1 ; $i <=50 ; $i++):
    echo "$i ";
endfor ;

echo "<h4>FOR EACH</h4>" ;
echo "<hr>" ;

# Sentecia FOR EACH ( se va a utilizar sobre todo con arrays )
# Se puede {} si tiene una sola instruccion
$array = [1,23,55,58,32, 8 => 15,2000,500,37,1.5,3.1415];
         #0 1   2  3 4   8        9    10  11 12 13 14

# opcion 1
##########

/* foreach($array as $valor) {
    echo "$valor " ;
} ; */

# opcion 2
##########

/* foreach($array as $valor) echo "$valor " ; */

# opcion 3
##########

/* 
foreach($array as $valor):
    echo "$valor " ;
endforeach;
*/

foreach($array as $indice => $valor):
    echo " Coleccion[$indice] = $valor " ;
endforeach;








?>




    
</body>
</html>