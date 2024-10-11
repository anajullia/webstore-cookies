<?php
// Lê o cookie para verificar quais produtos estão selecionados
$produtos_selecionados = isset($_COOKIE['produtos_selecionados']) ? explode(',', $_COOKIE['produtos_selecionados']) : [];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1 class="mb-4">Selecione seus produtos</h1>
    <form method="POST" action="processar.php">
        <div class="containercompra d-flex flex-row ">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="produtos[]" value="Produto A" 
                    <?php echo in_array('Produto A', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label">Produto A</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="produtos[]" value="Produto B" 
                    <?php echo in_array('Produto B', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label">Produto B</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="produtos[]" value="Produto C" 
                    <?php echo in_array('Produto C', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label">Produto C</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="produtos[]" value="Produto D" 
                    <?php echo in_array('Produto D', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label">Produto D</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="produtos[]" value="Produto E" 
                    <?php echo in_array('Produto E', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label">Produto E</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Adicionar ao Carrinho</button>
    </form>

    <a href="carrinho.php" class="btn btn-secondary mt-3">Ver Carrinho</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
