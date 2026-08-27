<?php
require '../infra/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $pdo = conectar();
    $sql = "INSERT INTO cliente (nome, email, telefone, endereco) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $telefone, $endereco]);

    header("Location: listar_clientes.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="POST" action="cadastrar_cliente.php">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" required><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    <a href="listar_clientes.php">Ver clientes</a>
</body>
</html>