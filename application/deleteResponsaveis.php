<?php
include("database.php");
$idResponsavel = $_GET['id'];
$delete = $conn->prepare("DELETE FROM responsavel_tecnico  WHERE id_responsavel = ?");
$delete->execute(array($idResponsavel));

?>