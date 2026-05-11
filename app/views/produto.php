<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja bem-vindo</title>
</head>
<body>
   <h1><?php echo $titulo_pagina; ?></h1>

    <table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
    </tr>

    <?php foreach ($produtos as $item): ?>
        <tr>
            <td><?= $item['nome'] ?></td>
            <td>R$ <?= $item['preco'] ?></td>
            <td><?= $item['qtd'] ?> unidades</td>
        </tr>
    <?php endforeach; ?>
</table>
</html>