<?php

require_once ("conexion.php");

$id = $_GET['id'];
$pagado = 1;

$sqlEdit = "UPDATE gastos set pagado = ? where id = ?";

$stmt = $conexion->prepare($sqlEdit);
$stmt->bind_param("ss", $pagado, $id); 

if ($stmt->execute()) {
    header("Location:index.php?estadomod=exito");
} else {
    header("Location:index.php?estadomod=error");
}
