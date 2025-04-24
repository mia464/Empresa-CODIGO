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

    $factura= $_POST['factura'];
    $serie= $_POST['serie'];
    $producto= $_POST['producto'];
    $total= $_POST['total'];
    $peso= $_POST['peso'];


    $consulta="INSERT INTO facturacion(factura,serie,producto,total,peso)
    VALUES ('$factura' , '$serie' , '$producto' , '$total' , '$peso')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM facturacion WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>