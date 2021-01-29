
<?php
include("database.php");
$idVenda = $_GET['id'];
$delete = $conn->prepare("DELETE FROM vendas  WHERE venda = ?");
$delete->execute(array($idVenda));
?>