<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Musica</title>
</head>
<body>
    <h1>Tipo de Musica de tu Estacion</h1>
    <form class="formulario" action="guardarM.php" method="POST">
    <fieldset>
            <legend>Datos de la Musica</legend>

            <label for="Musica">Genero de Musica</label>
            <input type="text" id="Musica" name="Musica" maxlength="25"><br>

            <label for="NoFrec">Numero de Frecuencia</label>
            <input type="number" id="NoFrec" name="NoFrec" maxlength="5" required><br>

            <label for="Nombre">Nombre de la Cancion</label>
            <input type="text" id="Nombre" name="Nombre" maxlength="25" required><br>

            <label for="Art">Artista o Grupo</label>
            <input type="text" id="Art" name="Art" maxlength="50" required autocomplete="off"><br>


            <button class="submit" type="submit">Registrar Genero de Musica</button>
        </fieldset>
    </form>
</body>
</html>