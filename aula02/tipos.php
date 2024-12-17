<!DOCTYPE html>  <!-- Declara que este documento é do tipo HTML5 -->
<html lang="pt-br">  <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"/>  <!-- Define a codificação de caracteres como UTF-8 (para suportar acentuação e caracteres especiais) -->
    <title>Curso PHP Iniciante - Exemplos de Variáveis</title>  <!-- Define o título da página, que aparecerá na aba do navegador -->
</head>
<body>
    <h1>Curso PHP Iniciante - Exemplos de Variáveis</h1>  <!-- Cabeçalho principal (h1) da página -->

    <h2>Comandos de saída do PHP</h2>  <!-- Subtítulo (h2) sobre os comandos de saída -->
    <p>Os comandos <strong>ECHO</strong>, <strong>PRINT</strong> e <strong>PRINTF</strong> servem para gerar saídas na tela. Exemplo:</p>  <!-- Parágrafo explicativo sobre comandos de saída -->
    <pre>  <!-- Tag para exibir o código PHP de maneira formatada -->
        <?php
        echo "Estou aprendendo variáveis em PHP";  // Exibe o texto na tela
        ?>
    </pre>
    <p>Esse comando exibirá o texto "Estou aprendendo variáveis em PHP". Você pode utilizar tags HTML dentro dos comandos de saída, como em uma quebra de linha:</p>  <!-- Parágrafo explicando que é possível usar HTML no PHP -->
    <pre>
        <?php
        echo "Estou aprendendo variáveis em PHP<br>";  // Adiciona uma quebra de linha HTML
        ?>
    </pre>

    <h2>Usando variáveis</h2>  <!-- Subtítulo sobre como usar variáveis -->
    <p>Variáveis são espaços na memória do computador que podem armazenar valores. Exemplo de declaração de variáveis:</p>  <!-- Parágrafo explicativo sobre o que são variáveis -->
    <pre>
        <?php
        $idade = 15;  // A variável $idade armazena um número inteiro
        $nome = "Gustavo";  // A variável $nome armazena uma string
        ?>
    </pre>

    <h3>Declaração de variáveis</h3>  <!-- Subtítulo sobre declaração de variáveis -->
    <p>No PHP, as variáveis são automaticamente tipadas conforme o valor atribuído a elas, processo conhecido como coerção. Veja um exemplo:</p>  <!-- Parágrafo explicativo sobre coerção de tipos -->
    <pre>
        <?php
        $salario = 1500.25;  // Variável do tipo float (número decimal)
        $casado = true;  // Variável booleana (verdadeiro ou falso)
        ?>
    </pre>

    <h3>Atribuição de valores</h3>  <!-- Subtítulo sobre atribuição de valores às variáveis -->
    <p>Atribuir um valor a uma variável é simples, usamos o operador de atribuição <strong>=</strong>. Exemplos:</p>  <!-- Parágrafo explicativo sobre o operador de atribuição -->
    <pre>
        <?php
        $idade = 15;  // Atribuindo o valor 15 à variável $idade
        $salario = 1500.25;  // Atribuindo o valor 1500.25 à variável $salario
        $nome = "Gustavo";  // Atribuindo a string "Gustavo" à variável $nome
        $casado = true;  // Atribuindo o valor booleano true à variável $casado
        ?>
    </pre>

    <h3>Concatenação de valores</h3>  <!-- Subtítulo sobre concatenação de valores -->
    <p>Concatenar valores em PHP é feito com o operador <strong>.</strong>. Exemplo:</p>  <!-- Parágrafo explicativo sobre o operador de concatenação -->
    <pre>
        <?php
        $idade = 18;  // A variável $idade recebe o valor 18
        $nome = "Maria";  // A variável $nome recebe a string "Maria"
        echo $nome . " tem " . $idade . " anos";  // Concatena as variáveis $nome e $idade com o texto e exibe "Maria tem 18 anos"
        ?>
    </pre>

    <h3>Concatenação simplificada</h3>  <!-- Subtítulo sobre concatenação simplificada -->
    <p>Você também pode concatenar valores dentro de aspas duplas:</p>  <!-- Parágrafo explicando a concatenação simplificada -->
    <pre>
        <?php
        echo "$nome tem $idade anos";  // Exibe diretamente a variável dentro da string sem necessidade de operador ponto
        ?>
    </pre>
</body>
</html>

