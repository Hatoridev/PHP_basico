<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Definindo a codificação de caracteres como UTF-8 -->
    <meta charset="UTF-8">
    <!-- Título da página exibido na aba do navegador -->
    <title>Operadores Aritméticos em PHP</title>
</head>
<body>
    <!-- Cabeçalho principal da página -->
    <h1>Exemplos de Operadores Aritméticos e Funções Matemáticas em PHP</h1>

    <?php
        // -------------------------
        // 1. Operadores Aritméticos
        // -------------------------

        // Declaração de variáveis para operações matemáticas
        $n1 = 3; // Variável $n1 recebe o valor 3
        $n2 = 2; // Variável $n2 recebe o valor 2

        // Soma entre dois números
        $soma = $n1 + $n2; // Soma os valores de $n1 e $n2 e armazena em $soma
        echo "A soma entre $n1 e $n2 é igual a $soma <br>"; // Exibe o resultado da soma com uma quebra de linha

        // Exemplo de ordem de precedência
        $nota1 = 8; // Variável $nota1 recebe o valor 8
        $nota2 = 6; // Variável $nota2 recebe o valor 6
        
        // Média calculada incorretamente por conta da precedência
        $mediaErrada = $nota1 + $nota2 / 2; // A divisão é feita antes da soma
        echo "Média calculada ERRADA: $mediaErrada <br>"; // Exibe a média errada

        // Média calculada corretamente com parênteses
        $mediaCorreta = ($nota1 + $nota2) / 2; // Soma primeiro e depois divide
        echo "Média calculada CORRETA: $mediaCorreta <br>"; // Exibe a média correta com uma quebra de linha

        // -------------------------
        // 2. Obtendo valores da URL
        // -------------------------

        // URL esperada: ?a=3&b=2
        // A função $_GET pega os valores passados pela URL
        $valor1 = $_GET["a"]; // Obtém o valor do parâmetro 'a' na URL e armazena em $valor1
        $valor2 = $_GET["b"]; // Obtém o valor do parâmetro 'b' na URL e armazena em $valor2

        // Soma dos valores obtidos via URL
        $resultado = $valor1 + $valor2; // Soma os valores de $valor1 e $valor2
        echo "<br>Valor de 'a' na URL: $valor1"; // Exibe o valor de 'a' passado na URL
        echo "<br>Valor de 'b' na URL: $valor2"; // Exibe o valor de 'b' passado na URL
        echo "<br>A soma entre $valor1 e $valor2 é igual a $resultado <br>"; // Exibe o resultado da soma

        // -------------------------
        // 3. Funções Matemáticas
        // -------------------------

        // Exemplo com diversas funções matemáticas em PHP

        $numero = -9; // Declara a variável $numero com um valor negativo
        
        // 1. abs(): Retorna o valor absoluto (positivo) de um número
        echo "<br>O valor absoluto de $numero é: " . abs($numero);

        // 2. pow(): Calcula a potência de um número
        echo "<br>3 elevado ao quadrado é: " . pow(3, 2); // 3^2 = 9

        // 3. sqrt(): Calcula a raiz quadrada de um número
        echo "<br>A raiz quadrada de 25 é: " . sqrt(25); // A raiz quadrada de 25 é 5

        // 4. round(): Arredonda um número para o valor mais próximo
        echo "<br>O valor 3.8 arredondado é: " . round(3.8); // Arredonda para 4

        // 5. intval(): Trunca o número, ou seja, pega apenas a parte inteira
        echo "<br>A parte inteira de 8.7 é: " . intval(8.7); // Pega apenas 8

        // 6. number_format(): Formata um número com casas decimais e separadores
        $valorFormatado = number_format(3258.754, 2, ",", "."); 
        // 3258.754 formatado para duas casas decimais, com vírgula e ponto
        echo "<br>O valor 3258.754 formatado é: $valorFormatado";

        // 7. ceil(): Arredonda um número para cima
        echo "<br>Arredondamento para cima de 4.2: " . ceil(4.2); // Arredonda para 5

        // 8. floor(): Arredonda um número para baixo
        echo "<br>Arredondamento para baixo de 4.8: " . floor(4.8); // Arredonda para 4
    ?>
</body>
</html>

