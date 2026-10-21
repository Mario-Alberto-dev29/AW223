<?php

require_once ("conexion.php");

$nombreviejo = $_POST['nombreviejo'];
$correoviejo = $_POST['correoviejo'];
$mensajeviejo = $_POST['mensajeviejo'];
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sqlEdit = "UPDATE mensajes set nombre = ?, correo = ?, mensaje = ? where nombre = ? AND correo = ? AND mensaje = ?";

$stmt = $conexion->prepare($sqlEdit);
$stmt->bind_param("ssssss", $nombre, $correo, $mensaje, $nombreviejo, $correoviejo, $mensajeviejo); 

if ($stmt->execute()) {
    header("Location:index.php?estadomod=exito");
} else {
    header("Location:index.php?estadomod=error");
}

/*

require_once "conexion.php";
    $updateMsj= "update mensajes set nombre = '$nombre', correo = '$correo', mensaje = '$mensaje' where nombre = '$nombreviejo' AND correo = '$correoviejo' AND mensaje = '$mensajeviejo'";
    try {
    $rsMsj = mysqli_query($conexion, $updateMsj);
    mysqli_close($conexion);
    return $rsMsj;
    alert('Mensaje editado');
    } catch(Exception $e) {
    die('Algo paso al editar: ' .$e->getMessage() );
    }

*/