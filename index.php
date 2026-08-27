<?php

include "infra/conexao.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Ifood</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body class = "pagina-index">
    <header>
        <h1 class = "index-inicial"> Seja muito bem vindo ao nosso sistema de delivery, oque deseja fazer hoje? </h1>
    </header>
    <main class = "botoes.index">

        <a href="public/listar_cliente.php">
            <button type="button">Página de clientes</button>
        </a> 

        <a href="public/restaurantes.php">
            <button type="button">Página de restaurantes</button>
        </a> 

        <a href="public/pedidos.php">
            <button type="button">Página de pedidos</button>
        </a> 

    </main>

</body>

</html>