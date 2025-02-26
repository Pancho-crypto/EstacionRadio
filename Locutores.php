<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Locutores</title>
</head>
<body>
    <h1>Los Locutores</h1>
    <form class="formulario" action="guardarL.php" method="POST">
    <fieldset>
            <legend>Datos de los Locutores</legend>

            <label for="Nombre">Nombre del Locutor</label>
            <input type="text" id="Nombre" name="Nombre" maxlength="50" required><br>

            <label for="Apodo">Apodo del locutor</label>
            <input type="text" id="Apodo" name="Apodo" maxlength="25" required><br>

            <label for="Programa">Nombre del Programa</label>
            <input type="text" id="Programa" name="Programa" maxlength="50" required autocomplete="off"><br>

            <label for="Horario">El horario del Programa</label>
            <input type="text" id="Horario" name="Horario" maxlength="15" required autocomplete="off"><br>

            <button class="submit" type="submit">Registrar Locutor</button>
        </fieldset>
    </form>
</body>
</html>