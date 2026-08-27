<?php
require '../infra/conexao.php';

$pdo = conectar();

// Se o formulário foi enviado, atualiza o cliente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "UPDATE cliente SET nome = ?, email = ?, telefone = ?, endereco = ? WHERE id_cliente = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $telefone, $endereco, $id]);

    header("Location: listar_clientes.php");
    exit;
}

// Busca os dados atuais do cliente pra preencher o formulário
$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id_cliente = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$cliente = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form method="POST" action="editar_cliente.php">
        <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $cliente['email'] ?>" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>" required><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?= $cliente['endereco'] ?>" required><br>

        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="listar_clientes.php">Voltar</a>
</body>
</html>