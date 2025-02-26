<?php
    include("abre.php");

    $Programa    =$_POST['Programa'];
    $Horario   =$_POST['Horario'];
    $Tipo    =$_POST['Tipo'];
    $Loc   =$_POST['Loc'];

    $consulta = "INSERT INTO Programa(Programa, Horario, Tipo, Loc) VALUES 
    ('$Programa', '$Horario', '$Tipo', '$Loc')";

    if($conexion->query($consulta) === TRUE ){
        header("Location: Programa.php");
    }else{
        echo "El error es " .$consulta. "br" .$conexion->error;
    }

    $conexion->close();
?>