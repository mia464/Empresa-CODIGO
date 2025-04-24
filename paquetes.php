<?php

$conexion = mysqli_connect('localhost','root','','cargo') or die (mysqli_error($mysqli));
diferencia ($conexion);

function diferencia($conexion){

    if(isset($_POST['Guardar'])){
        insertar ($conexion);
    }
    if(isset($_POST['Borrar'])){
        eliminar($conexion);
    }
}

insertar ($conexion);
function insertar ($conexion){

    $nombre= $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $cantidad= $_POST['cantidad'];
    $peso= $_POST['peso'];
    $tipo= $_POST['tipo'];


    $consulta="INSERT INTO paquetes(nombre,direccion,cantidad,peso,tipo)
    VALUES ('$nombre' , '$direccion' , '$cantidad' , '$peso' , '$tipo')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM paquetes WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>