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
    $apellido= $_POST['apellido'];
    $edad= $_POST['edad'];
    $dpi= $_POST['dpi'];
    $correo= $_POST['correo'];


    $consulta="INSERT INTO clientes(nombre,apellido,edad,dpi,correo)
    VALUES ('$nombre' , '$apellido' , '$edad' , '$dpi' , '$correo')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM clientes WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>