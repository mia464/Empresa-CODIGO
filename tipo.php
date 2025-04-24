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
    $paquete= $_POST['paquete'];
    $entrega= $_POST['entrega'];
    $deposito= $_POST['deposito'];
    $total= $_POST['total'];


    $consulta="INSERT INTO tipo(factura,serie,paquete,entrega,deposito,total)
    VALUES ('$factura' , '$serie' , '$paquete' , '$entrega' ,'$deposito' ,'$total')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM tipo WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>