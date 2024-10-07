<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>

    <div class="container p-5">

        <h1 class="text-primary">Hobbies</h1>

        <hr>

        <form action="procesar.php" method="get">

            <div class="mb-3">
                <label for="InputName" class="form-label">Nombre </label>
                <input type="text" class="form-control" id="InputName" name="InputName" aria-describedby="NameHelp" maxlength="250">
            </div>

            <div class="mb-3">
                <label for="InputLastName" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="InputLastName" name="InputLastName" maxlength="250">
            </div>

            <div class="mb-3">
                <label for="InputEdad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="InputEdad" name="InputEdad">
            </div>


            <select class="form-select" aria-label="Default select example " id="InputAfi" name="InputAfi[]" multiple required>
                
                <option value="Mondongo">  Mondongo </option>
                <option value="Basket"> Basket </option>
                <option value="Dormir"> Dormir </option>
                <option value="Comer"> Comer </option>
                <option value="Correr"> Correr </option>
                <option value="PHP"> PHP </option>
                <option value="Cine"> Cine </option>
                <option value="Series"> Series </option>
                <option value="League of legends"> League of legends </option>
                
            </select>
            
            <div class=" pt-5 ">  
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>

        </form>
    </div>


</body>

</html>