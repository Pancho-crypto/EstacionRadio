<?php
    include("abre.php");

    $NoFrec    =$_POST['NoFrec'];
    $Nombre    =$_POST['Nombre'];
    $Programa    =$_POST['Programa'];
    $Loc   =$_POST['Loc'];
    $Music    =$_POST['Music'];

    $consulta = "INSERT INTO Frecuencia(NoFrec, Nombre, Programa, Loc, Music) VALUES 
    ('$NoFrec', '$Nombre','$Programa','$Loc','$Music')";

    if($conexion->query($consulta) === TRUE ){
        header("Location: Frecuencia.php");
    }else{
        echo "El error es " .$consulta. "br" .$conexion->error;
    }

    $conexion->close();
?>