<?php
include("database.php");
$idClientes = $_GET['id'];
$delete = $conn->prepare("DELETE FROM cliente  WHERE id_cliente = ?");
$delete->execute(array($idClientes));
header('Location: index.php?go=clientes');

?>