<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Funções em PHP</title>
</head>
<body>

<?php
// Função simples para somar dois números e exibir o resultado
function soma($a, $b) {
    $s = $a + $b;  // Soma os valores de $a e $b
    echo "<p>Resultado da soma: $s</p>";  // Exibe o resultado da soma
}

// Chamando a função soma e passando os valores 3 e 4
soma(3, 4);

// Função soma com return, retornando o valor da soma
function somaComRetorno($a, $b) {
    $s = $a + $b;  // Soma os valores de $a e $b
    return $s;  // Retorna o resultado da soma
}

// Chamando a função somaComRetorno e armazenando o valor retornado
$res = somaComRetorno(3, 4);

// Exibindo o resultado retornado pela função
echo "<p>Resultado retornado pela função: $res</p>";

// Função para somar números variáveis usando func_get_args e func_num_args
function somaVariavel() {
    $args = func_get_args();  // Obtém todos os argumentos passados para a função
    $t = func_num_args();  // Obtém o número total de argumentos
    $s = 0;  // Variável para armazenar o resultado da soma

    // Loop para somar todos os argumentos
    for ($i = 0; $i < $t; $i++) {
        $s += $args[$i];  // Soma cada valor ao total
    }

    return $s;  // Retorna o total da soma
}

// Chamando a função somaVariavel com vários parâmetros e exibindo o resultado
$total = somaVariavel(1, 2, 3, 4, 5);
echo "<p>Resultado da soma com múltiplos argumentos: $total</p>";

?>

</body>
</html>

