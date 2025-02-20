<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aqui você pode adicionar o código para processar os dados do formulário, como salvar no banco de dados

    // Exibir mensagem de sucesso
    echo "<h1>Dados enviados com sucesso!</h1>";
} else {
    // Se o método de requisição não for POST, redirecionar para o formulário
    header("Location: form001.html");
    exit();
}
?>
