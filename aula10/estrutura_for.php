<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de For em PHP</title>
</head>
<body>

<?php
// Exibindo uma mensagem inicial para o usuário
echo "<h1>Contagem de 1 a 10 utilizando a estrutura for</h1>"; 

// Estrutura for: inicia o contador, executa o bloco e verifica a condição após cada iteração
for ($contador = 1; $contador <= 10; $contador++) {
    // Exibe o valor atual de $contador
    echo "<p>Contagem: $contador</p>"; // Exibe o valor de $contador
}

// Exibe uma mensagem quando o loop termina
echo "<p>O loop for terminou!</p>"; // Mensagem informando que o loop terminou
?>

</body>
</html>

