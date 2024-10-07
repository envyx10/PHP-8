<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>


</head>
<body>


<?php 

$peliculas = [

    [
        "titulo" => "Inception",
        "poster" => "https://image.tmdb.org/t/p/original/tXQvtRWfkUUnWJAn2tN3jERIUG.jpg",
        "plataforma" => "Amazon Prime Video",
        "nota_imdb" => "8.8",
        "argumento" => "Dom Cobb (DiCaprio) es un especialista en sustraer información del subconsciente de las personas a través de sus sueños."
    ],
    [
        "titulo" => "The Matrix",
        "poster" => "https://image.tmdb.org/t/p/original/qK76PKQLd6zlMn0u83Ej9YQOqPL.jpg",
        "plataforma" => "HBO Max",
        "nota_imdb" => "8.7",
        "argumento" => "Thomas Anderson es un brillante programador de una respetable compañía de software. Pero fuera del trabajo es Neo, un hacker que un día recibe una misteriosa visita."
    ],
    [
        "titulo" => "Interstellar",
        "poster" => "https://image.tmdb.org/t/p/original/nrSaXF39nDfAAeLKksRCyvSzI2a.jpg",
        "plataforma" => "Amazon Prime Video",
        "nota_imdb" => "8.6",
        "argumento" => "Un equipo de exploradores viaja a través de un agujero de gusano en el espacio en un intento de asegurar la supervivencia de la humanidad."
    ],
    [
        "titulo" => "The Dark Knight",
        "poster" => "https://image.tmdb.org/t/p/original/8QDQExnfNFOtabLDKqfDQuHDsIg.jpg",
        "plataforma" => "HBO Max",
        "nota_imdb" => "9.0",
        "argumento" => "Batman se enfrenta al Joker, un criminal psicópata que quiere sumir a Gotham en la anarquía."
    ],
    [
        "titulo" => "Pulp Fiction",
        "poster" => "https://image.tmdb.org/t/p/original/1yWmCAIGSVNuTOGyz9F48W9g1Ux.jpg",
        "plataforma" => "Netflix",
        "nota_imdb" => "8.9",
        "argumento" => "Las vidas de dos sicarios, un boxeador, la esposa de un gánster y dos bandidos se entrelazan en cuatro historias de violencia y redención."
    ],
    [
        "titulo" => "Fight Club",
        "poster" => "https://image.tmdb.org/t/p/original/hNcQAuquJxTxl2fJFs1R42DrWcf.jpg",
        "plataforma" => "Amazon Prime Video",
        "nota_imdb" => "8.8",
        "argumento" => "Un oficinista insomne y un vendedor de jabón forman un club de lucha clandestino que se convierte en algo mucho más."
    ],
    [
        "titulo" => "Forrest Gump",
        "poster" => "https://image.tmdb.org/t/p/original/oiqKEhEfxl9knzWXvWecJKN3aj6.jpg",
        "plataforma" => "Netflix",
        "nota_imdb" => "8.8",
        "argumento" => "La vida de Forrest Gump, un hombre con un coeficiente intelectual bajo, que presencia y participa en algunos de los eventos más importantes de la historia de EE.UU."
    ],
    [
        "titulo" => "The Shawshank Redemption",
        "poster" => "https://image.tmdb.org/t/p/original/uRRTV7p6l2ivtODWJVVAMRrwTn2.jpg",
        "plataforma" => "HBO Max",
        "nota_imdb" => "9.3",
        "argumento" => "Dos hombres encarcelados forjan una amistad a lo largo de varios años, encontrando consuelo y redención a través de actos de decencia común."
    ],
    [
        "titulo" => "The Godfather",
        "poster" => "https://image.tmdb.org/t/p/original/ApiEfzSkrqS4m1L5a2GwWXzIiAs.jpg",
        "plataforma" => "Amazon Prime Video",
        "nota_imdb" => "9.2",
        "argumento" => "El envejecido patriarca de una dinastía criminal traslada el control de su imperio clandestino a su hijo reacio."
    ],
    [
        "titulo" => "The Lord of the Rings: The Return of the King",
        "poster" => "https://image.tmdb.org/t/p/original/mWuFbQrXyLk2kMBKF9TUPtDwuPx.jpg",
        "plataforma" => "HBO Max",
        "nota_imdb" => "8.9",
        "argumento" => "Gandalf y Aragorn lideran el Mundo de los Hombres contra el ejército de Sauron para distraerlo mientras Frodo y Sam se acercan al Monte del Destino con el Anillo Único."
    ]
];

?>

<div class="container-fluid">

    <div class="container ">

        <?php foreach($peliculas as $apunta): ?>

            <div class="row mb-4 mt-5 m-5">

                <div class="img-fluid col-md-3">

                    <img src=" <?= $apunta["poster"];  ?>" alt="pelis" class="img-fluid rounded w-75">

                </div>

                <div class="col-md-9">

                    <h1 ><?= $apunta["titulo"] ; ?></h1>  
                        <hr/>
                    <p class="fw-bold"><?= $apunta["plataforma"] ; ?></p> 
                    <p class="text-muted"> <b>Nota: </b><?= $apunta["nota_imdb"] ; ?></p> 
                    <p> <b>Argumento<br/></b> <?=$apunta["argumento"] ; ?></p> 

                </div>

            </div>

        <?php endforeach;?>

        

    </div>
    
    





</div>

    
</body>
</html>