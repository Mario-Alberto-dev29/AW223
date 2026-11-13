<?php

require_once ("conexion.php");

$concepto = $_POST['concepto'];
$monto = $_POST['monto'];
$categoria = $_POST['categoria'];

$sqlInsert = "INSERT INTO gastos (concepto, monto, categoria) VALUES (?, ?, ?)";;

$stmt = $conexion->prepare($sqlInsert);
$stmt->bind_param("sss", $concepto, $monto, $categoria); 

if ($stmt->execute()) {
    header("Location:index.php?estadomod=exito");
} else {
    header("Location:index.php?estadomod=error");
}