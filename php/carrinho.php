<?php
// Verifica se o botão de limpar o carrinho foi clicado
if (isset($_GET['limpar'])) {
    // Define o cookie 'carrinho' com um tempo de expiração passado, ou seja, apagando-o
    setcookie('carrinho', '', time() - 3600, '/');
    
    // Também limpa o cookie que mantém o estado das checkboxes
    setcookie('produtos_selecionados', '', time() - 3600, '/');
    
    // Redireciona para a página do carrinho após limpar
    header("Location: carrinho.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <?php if (isset($_COOKIE['carrinho'])): ?>
        <h1>Seu Carrinho</h1>
        <p>Produtos no carrinho: <?= htmlspecialchars($_COOKIE['carrinho']) ?></p>
        <a href="index.php" class="btn btn-primary">Voltar para a loja</a>
        <a href="carrinho.php?limpar=true" class="btn btn-danger">Limpar Carrinho</a>
    <?php else: ?>
        <h1>Seu Carrinho está vazio</h1>
        <a href="index.php" class="btn btn-primary">Voltar para a loja</a>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
