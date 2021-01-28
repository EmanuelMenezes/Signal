<?php
include("database.php");
$idEmpreendimentos = $_GET['id'];
$delete = $conn->prepare("DELETE FROM empreendimentos  WHERE empreendimento = ?");
$delete->execute(array($idEmpreendimentos));

?>