<?php
// Verifica se o formulário foi enviado e se há produtos selecionados
if (isset($_POST['produtos'])) {
    $produtos_selecionados = $_POST['produtos']; // Array de produtos selecionados
    
    // Converte o array de produtos em uma string separada por vírgula
    $produtos_string = implode(", ", $produtos_selecionados);
    
    // Atualiza o cookie que vai armazenar os produtos do carrinho (expira em 1 hora)
    setcookie('carrinho', $produtos_string, time() + 3600, '/');

    // Atualiza o cookie para manter o estado das checkboxes
    setcookie('produtos_selecionados', implode(',', $produtos_selecionados), time() + 3600, '/');
    
    // Redireciona o usuário para o carrinho
    header("Location: carrinho.php");
    exit();
} else {
    // Se nenhum produto foi selecionado, exibe uma mensagem
    echo "Nenhum produto foi selecionado. <a href='index.php'>Voltar</a>";
}
?>
