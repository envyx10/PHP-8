<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo!</title>

</head>
<body>
    
    <?php
    
         # Esto es un comentario
        // Esto es un comentario
        /* Esto es un comentario  */

        # Todo lo haya aqui dentro php lo ejecturaria
        echo "<h1>" , "Hola Mundo con echo!" , "</h1>\n" ; # Con el echo voy a escribir en el documento html resulante

         # Esto es un comentario
        // Esto es un comentario
        /* Esto es un comentario  */

        print "<h1> Hola mundo con print! </h1>" ; # Este no lo usaremos casi nunca

        # Algunas variables
        $numero = 8 ;
        echo "<p> El número es: " , $numero, "</p>" ;

        # 
        $color = "azul" ; # Los String siempre van entre " "
        $$color = 128   ; # Creando una variable que se llama azul, es decir, coge la variable de arriba color

        echo "Primera variable: " , $color  , "<br/>";
        echo "Primera variable: " , $$color ,"<br/>";

        # Salida informada por pantalla 
        var_dump($color);

        # Tipo Double
        $foo = 1.234;
        $foo = 1.2e3; # Notacion cientifica
        $foo = 7E-10; 

        #

        /* 

        # Expansion de variables ( interpolacion)

        $resultado = $a + $b ;
        echo " El resultado es:  $resultado " ;  

        */

        # Solo hay que escaparla si coincide con el nombre de una variable
        $numero = 8;
        echo "<p> El número es: " , $numero, "</p>" ;
        echo "<p> El precio es de $numero</p>" ;

        # Creacion y manipulacion de arrays
        
        # Metodo moderno --> $numeros = [42,31,28,-5,13];
        # Metodo tradicional --> $numeros = array ( 42,31,28,-5,13 )
        
        /*   

        NO USAR ESTE METODO
   
        $numeros[] = 42;
        $numeros[] = 31;
        $numeros[] = 28;
        $numeros[] = -5;
        $numeros[] = 13;

        */

    /*     $numeros = [42,31,28,-5,13];
        print_r($numeros ) ,; */
        
        # OPERADOR SPACESHIP
        echo 1 <=> 1 , "<br>"; 
        echo 1 <=> 10, "<br>"; 
        echo 10 <=> 1, "<br>";
        # OPERADOR de coalescencia nula
        $b = 5;
        $c = 80;
        $d = "me hace falta uno o cinco cafés";
        
        echo $b ?? $c ?? $d;

        # Operadpres de ARRAYS 
        $a = [2,4];
        $b = [3,5,7];
        $c = $a + $b;




    ?>





</body>
</html>