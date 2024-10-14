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
    <link rel="stylesheet" href="../style.css">
</head>
<body class="container mt-5">

    <h1 class="mb-4 titulo">Selecione seus produtos</h1>
    <form method="POST" action="processar.php">
        <div class="divbotoes d-flex flex-row gap-3">
            <button type="submit" class="btn btn-primary mt-3 btad">Adicionar ao Carrinho</button>
            <a href="carrinho.php" class="btn btn-secondary mt-3 btad">Ver Carrinho</a>
        </div>
            <div class="containercompra d-flex flex-row gap-3">
        
            <div class="form-check d-flex flex-column divprod">
                <div class="imgprod"> 
                    <img src="../assets/camisa1930.webp" width=200></img>
                </div>
                <input class="form-check-input checkprod" type="checkbox" name="produtos[]" value="Camisa SP - R. 1930" 
                    <?php echo in_array('Camisa SP - R. 1930', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
                <label class="form-check-label labelprod labelpreco">R$299,90</label>
            </div>

            <div class="form-check d-flex flex-column divprod">
                <div class="imgprod"> 
                    <img src="../assets/camisa1966.jpg" width=200></img>
                </div>
                <input class="form-check-input checkprod" type="checkbox" name="produtos[]" value="Camisa SP - R. 1966" 
                    <?php echo in_array('Camisa SP - R. 1966', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
                <label class="form-check-label labelprod labelpreco">R$279,90</label>
            </div>

            <div class="form-check d-flex flex-column divprod">
                <div class="imgprod"> 
                    <img src="../assets/camisagoleiro1988.webp" width=200></img>
                </div>
                <input class="form-check-input checkprod" type="checkbox" name="produtos[]" value="Camisa SP Gol. - R. 1988" 
                    <?php echo in_array('Camisa SP Gol. - R. 1988', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
                <label class="form-check-label labelprod labelpreco">R$1.222,90</label>
            </div>

            <div class="form-check d-flex flex-column divprod">
                <div class="imgprod"> 
                    <img src="../assets/camisagoleiro1992.webp" width=200></img>
                </div>
                <input class="form-check-input checkprod" type="checkbox" name="produtos[]" value="Camisa SP Gol. - R. 1992" 
                    <?php echo in_array('Camisa SP Gol. - R. 1992', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
                <label class="form-check-label labelprod labelpreco">R$479,90</label>
            </div>

            <div class="form-check d-flex flex-column divprod">
                <div class="imgprod"> 
                    <img src="../assets/camisauruguai.webp" width=200></img>
                </div>
                <input class="form-check-input checkprod" type="checkbox" name="produtos[]" value="Camisa SP - Uruguai" 
                    <?php echo in_array('Camisa SP - Uruguai', $produtos_selecionados) ? 'checked' : ''; ?>>
                <label class="form-check-label labelprod">Camisa São Paulo - Uruguai</label>
                <label class="form-check-label labelprod labelpreco">R$299,90</label>
            </div>
            
        </div>

        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
