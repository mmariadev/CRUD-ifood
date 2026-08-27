<?php
require '../infra/conexao.php';

$id = $_GET['id'];

$pdo = conectar();
$sql = "DELETE FROM cliente WHERE id_cliente = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: listar_clientes.php");
exit;