<?php
    include("abre.php");

    $Nombre    =$_POST['Nombre'];
    $Apodo   =$_POST['Apodo'];
    $Programa    =$_POST['Programa'];
    $Horario    =$_POST['Horario'];

    $consulta = "INSERT INTO Locutores(Nombre, Apodo, Programa, Horario) VALUES 
    ('$Nombre','$Apodo','$Programa','$Horario')";

    if($conexion->query($consulta) === TRUE ){
        header("Location: Locutores.php");
    }else{
        echo "El error es " .$consulta. "br" .$conexion->error;
    }

    $conexion->close();
?>