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
    $departamento= $_POST['departamento'];
    $municipio= $_POST['municipio'];
    $calle= $_POST['calle'];
    $tel= $_POST['tel'];


    $consulta="INSERT INTO destinos(nombre,departamento,municipio,calle,tel)
    VALUES ('$nombre' , '$departamento' , '$municipio' , '$calle' , '$tel')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM destinos WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>