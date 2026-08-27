<?php
require '../infra/conexao.php';

$pdo = conectar();
$sql = "SELECT * FROM cliente";
$stmt = $pdo->query($sql);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="cadastrar_cliente.php">Cadastrar novo cliente</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente['id_cliente'] ?></td>
            <td><?= $cliente['nome'] ?></td>
            <td><?= $cliente['email'] ?></td>
            <td><?= $cliente['telefone'] ?></td>
            <td><?= $cliente['endereco'] ?></td>
            <td>
                <a href="editar_cliente.php?id=<?= $cliente['id_cliente'] ?>">Editar</a>
                <a href="excluir_cliente.php?id=<?= $cliente['id_cliente'] ?>" onclick="return confirm('Excluir este cliente?')">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>