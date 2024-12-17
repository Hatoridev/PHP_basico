<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de While em PHP</title>
</head>
<body>

<?php
// Definindo uma variável para controlar o loop
$contador = 1; // A variável $contador será inicializada com o valor 1

// Exibindo uma mensagem inicial para o usuário
echo "<h1>Contagem de 1 a 10 utilizando a estrutura while</h1>"; 

// Estrutura while: enquanto o valor de $contador for menor ou igual a 10
while ($contador <= 10) {
    // Exibe o valor atual de $contador
    echo "<p>Contagem: $contador</p>"; // Exibe a contagem atual

    // Incrementa o valor de $contador
    $contador++; // Aumenta $contador em 1 a cada iteração
}

echo "<p>O loop while terminou!</p>"; // Mensagem informando que o loop terminou
?>

</body>
</html>

