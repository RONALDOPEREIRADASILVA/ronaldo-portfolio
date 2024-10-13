<?php
$servidor = "localhost";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "grude";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
