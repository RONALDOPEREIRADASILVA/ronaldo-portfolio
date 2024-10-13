<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conteudo = $conn->real_escape_string($_POST['conteudo']);

    $sql = "INSERT INTO mensagens (conteudo) VALUES ('$conteudo')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensagem adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar mensagem: " . $conn->error;
    }

    $conn->close();
}

header("Location: index.php");
exit();
?>
