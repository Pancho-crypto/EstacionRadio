<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Programacion</title>
</head>
<body>
    <h1>Registra el nombre de tu programa</h1>
    <form class="formulario" action="guardarP.php" method="POST">
    <fieldset>
            <legend>Datos del Programa</legend>

            <label for="Programa">Nombre del Programa</label>
            <input type="text" id="Programa" name="Programa" maxlength="25" required><br>

            <label for="Horario">Horario del Programa</label>
            <input type="text" id="Horario" name="Horario" maxlength="25" required><br>

            <label for="Tipo">Tipo de Programa</label>
            <input type="text" id="Tipo" name="Tipo" maxlength="25" required autocomplete="off"><br>

            <label for="Loc">Locutor/es</label>
            <input type="text" id="Loc" name="Loc" maxlength="25" required autocomplete="off"><br>

            <button class="submit" type="submit">Registrar Programa</button>
        </fieldset>
    </form>
</body>
</html>