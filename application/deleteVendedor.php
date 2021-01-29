<?php
include("database.php");
$idVendedor = $_GET['id'];
$delete = $conn->prepare("DELETE FROM vendedor  WHERE id_vendedor = ?");
$delete->execute(array($idVendedor));
header('Location: index.php?go=vendedores');

?>