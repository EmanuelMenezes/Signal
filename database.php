<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signal";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Erro de conexão com o Banco de Dados: " . $e->getMessage();
    }
?>