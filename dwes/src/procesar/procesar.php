<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Procesar PHP </title>

</head>

<body>

    <!--  

        Si es Menor de edad
        Si es Mayor de edad
        Si es Jubilado > 70 años

        //

        Que salga distintas aficciones 

    -->

    <?php


    $edad = $_GET["InputEdad"];
    $nombre  = $_GET["InputName"];
    $apellido  = $_GET["InputLastName"];
    $num = count($_GET[("InputAfi")]);

    ?>

    <div class="container pt-5">
        <div class="container border rounded p-5">

            <h3> Bienvenido/a <?= $nombre . " " . $apellido ?> </h3>
            
            <h4> Tienes <?= $edad . " años , " ?>

                <?php

                    if ($edad < 18) {
                        echo "Eres menor de edad";
                    } else if ($edad < 70) {
                        echo "Eres mayor de edad";
                    } else {
                        echo "Jubilate.";
                    }
                    
                ?>

            </h4>

            <?= "Mis aficiones son: "; ?>

            <p class="text-muted">

                <?php foreach ($_GET[("InputAfi")] as $indice => $valor) { 
                    echo ($indice < $num - 1)  ? " $valor //" : " $valor ";
                } ?>

                <?= "." ?>
                
            </p>

       

        </div>

    </div>









</body>

</html>