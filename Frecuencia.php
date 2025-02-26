<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Frecuencia</title>
</head>
<body>
    <h1>Registra tu Estacion</h1>
    <form class="formulario" action="guardarF.php" method="POST">
    <fieldset>
            <legend>Datos de la Frecuencia de Radio</legend>

            <label for="NoFrec">Numero de Frecuencia</label>
            <input type="number" id="NoFrec" name="NoFrec" maxlength="5"><br>

            <label for="Nombre">Nombre de la estacion</label>
            <input type="text" id="Nombre" name="Nombre" maxlength="50" required><br>

            <label for="Programa">Nombre del Programa</label>
            <input type="text" id="Programa" name="Programa" maxlength="25" required><br>

            <label for="Loc">Locutor</label>
            <input type="text" id="Loc" name="Loc" maxlength="50" required autocomplete="off"><br>

            <label for="Music">Tipo de Musica</label>
            <input type="text" id="Music" name="Music" maxlength="15" required autocomplete="off"><br>

            <button class="submit" type="submit">Registrar Estacion</button>
        </fieldset>
    </form>
</body>
</html>