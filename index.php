<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Grude PHP</title>
</head>
<body>
    <h1>Deixe um recado!</h1>
    <form action="adicionar.php" method="post">
        <textarea name="conteudo" rows="4" cols="50" placeholder="Escreva sua mensagem aqui..."></textarea>
        <br>
        <input type="submit" value="Adicionar">
    </form>
    
    <h2>Mensagens:</h2>
    <?php
    $sql = "SELECT * FROM mensagens ORDER BY data_criacao DESC";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<div><p>" . htmlspecialchars($row['conteudo']) . "</p>";
            echo "<small>Enviado em: " . $row['data_criacao'] . "</small></div><hr>";
        }
    } else {
        echo "<p>Nenhuma mensagem encontrada.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
