<?php
include("database.php");
$idUnidade = $_GET['id'];
$delete = $conn->prepare("DELETE FROM unidades  WHERE unidade = ?");
$delete->execute(array($idUnidade));
?>