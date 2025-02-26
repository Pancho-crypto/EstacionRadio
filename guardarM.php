<?php
    include("abre.php");

    $Musica   =$_POST['Musica'];
    $NoFrec    =$_POST['NoFrec'];
    $Nombre    =$_POST['Nombre'];
    $Art  =$_POST['Art'];

    $consulta = "INSERT INTO Musica(Musica, NoFrec, Nombre, Art) VALUES 
    ('$Musica', '$NoFrec','$Nombre','$Art')";

    if($conexion->query($consulta) === TRUE ){
        header("Location: Musica.php");
    }else{
        echo "El error es " .$consulta. "br" .$conexion->error;
    }

    $conexion->close();
?>