<?php

require_once ("conexion_soporte.php");

$id_usuario = $_POST['id_usuario'];
$id_equipo = $_POST['id_equipo'];
$problema = $_POST['problema'];
$estado = $_POST['estado'];
$observacion = $_POST['observacion'];

$sqlEdit = "UPDATE solicitudes set estado = ?, observacion = ? where id_usuario = ? AND id_equipo = ? AND problema = ?";

$stmt = $conexion->prepare($sqlEdit);
$stmt->bind_param("sssss", $estado, $observacion, $id_usuario, $id_equipo, $problema); 

if ($stmt->execute()) {
    header("Location:gestion.php?estadomod=exito");
} else {
    header("Location:gestion.php?estadomod=error");
}