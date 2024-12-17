<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Switch em PHP</title>
</head>
<body>

<?php
// Definindo uma variável para realizar a comparação
$opcao = $_GET['opcao']; // Recebe o valor da opção da URL via método GET

// Exibe a opção recebida para o usuário
echo "<h1>Você escolheu a opção: $opcao</h1>"; // Exibe a opção selecionada

// Estrutura switch que faz a comparação da variável $opcao
switch ($opcao) {
    case '1': // Se a opção for 1
        echo "<p>Você escolheu a opção 1: Exibir relatório.</p>"; // Exibe mensagem para a opção 1
        break; // Interrompe o switch após executar o caso

    case '2': // Se a opção for 2
        echo "<p>Você escolheu a opção 2: Gerar gráfico.</p>"; // Exibe mensagem para a opção 2
        break; // Interrompe o switch após executar o caso

    case '3': // Se a opção for 3
        echo "<p>Você escolheu a opção 3: Enviar e-mail.</p>"; // Exibe mensagem para a opção 3
        break; // Interrompe o switch após executar o caso

    case '4': // Se a opção for 4
        echo "<p>Você escolheu a opção 4: Realizar backup.</p>"; // Exibe mensagem para a opção 4
        break; // Interrompe o switch após executar o caso

    default: // Caso nenhuma das opções acima seja escolhida
        echo "<p>Opção inválida. Por favor, escolha uma opção válida.</p>"; // Exibe mensagem de erro para opção inválida
        break; // Interrompe o switch após exibir a mensagem de erro
}

// Exemplo de como a URL deve ser preenchida
echo "<p>Exemplo de URL válida: estrutura_switch.php?opcao=1</p>"; // Exibe um exemplo de URL para o usuário
?>

</body>
</html>

