<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação de caracteres para UTF-8 -->
    <meta charset="UTF-8">
    <!-- Título da página que aparece na aba do navegador -->
    <title>Operadores Relacionais em PHP</title>
</head>
<body>
    <!-- Título principal exibido na página -->
    <h1>Operadores Relacionais no PHP</h1>

    <?php
        // Recebendo valores passados pela URL usando o método GET
        // Exemplo de URL: http://localhost/relacionais.php?a=5&b=3
        $n1 = $_GET["a"]; // Valor 1 passado na URL com chave "a"
        $n2 = $_GET["b"]; // Valor 2 passado na URL com chave "b"

        // Exibindo os valores recebidos
        echo "<p>Os valores passados foram <strong>$n1</strong> e <strong>$n2</strong>.</p>";

        // ----------------------------------
        // 1. Operadores Relacionais Básicos
        // ----------------------------------

        // Igualdade (==): verifica se os valores são iguais
        $resultado = ($n1 == $n2) ? "SIM" : "NÃO";
        echo "<p>Os valores <strong>$n1</strong> e <strong>$n2</strong> são iguais? <strong>$resultado</strong></p>";

        // Idêntico (===): verifica se os valores e os tipos são iguais
        $resultado = ($n1 === $n2) ? "SIM" : "NÃO";
        echo "<p>Os valores <strong>$n1</strong> e <strong>$n2</strong> são idênticos (valor e tipo)? <strong>$resultado</strong></p>";

        // Diferente (!= ou <>): verifica se os valores são diferentes
        $resultado = ($n1 != $n2) ? "SIM" : "NÃO";
        echo "<p>Os valores <strong>$n1</strong> e <strong>$n2</strong> são diferentes? <strong>$resultado</strong></p>";

        // Não idêntico (!==): verifica se os valores ou os tipos são diferentes
        $resultado = ($n1 !== $n2) ? "SIM" : "NÃO";
        echo "<p>Os valores <strong>$n1</strong> e <strong>$n2</strong> não são idênticos? <strong>$resultado</strong></p>";

        // Maior que (>): verifica se o valor da esquerda é maior
        $resultado = ($n1 > $n2) ? "SIM" : "NÃO";
        echo "<p>O valor <strong>$n1</strong> é maior que <strong>$n2</strong>? <strong>$resultado</strong></p>";

        // Menor que (<): verifica se o valor da esquerda é menor
        $resultado = ($n1 < $n2) ? "SIM" : "NÃO";
        echo "<p>O valor <strong>$n1</strong> é menor que <strong>$n2</strong>? <strong>$resultado</strong></p>";

        // Maior ou igual (>=): verifica se o valor da esquerda é maior ou igual
        $resultado = ($n1 >= $n2) ? "SIM" : "NÃO";
        echo "<p>O valor <strong>$n1</strong> é maior ou igual a <strong>$n2</strong>? <strong>$resultado</strong></p>";

        // Menor ou igual (<=): verifica se o valor da esquerda é menor ou igual
        $resultado = ($n1 <= $n2) ? "SIM" : "NÃO";
        echo "<p>O valor <strong>$n1</strong> é menor ou igual a <strong>$n2</strong>? <strong>$resultado</strong></p>";

        // ----------------------------------
        // 2. Utilizando Operadores Relacionais em uma Média
        // ----------------------------------

        // Exemplo prático: calcular a média entre dois números e verificar se a média é maior ou igual a 7
        $media = ($n1 + $n2) / 2; // Soma os valores e divide por 2
        echo "<p>A média entre <strong>$n1</strong> e <strong>$n2</strong> é <strong>$media</strong>.</p>";

        // Verificando se a média é suficiente (>= 7)
        $resultado = ($media >= 7) ? "APROVADO" : "REPROVADO";
        echo "<p>O aluno foi <strong>$resultado</strong> (Média >= 7).</p>";

        // ----------------------------------
        // 3. Trabalhando com Idade e Ano
        // ----------------------------------

        // Exemplo: calcular idade a partir do ano de nascimento passado pela URL
        // Exemplo de URL: http://localhost/relacionais.php?an=2000
        $anoAtual = 2024; // Define o ano atual
        $anoNascimento = isset($_GET["an"]) ? $_GET["an"] : $anoAtual; // Captura o ano passado ou usa padrão
        $idade = $anoAtual - $anoNascimento; // Calcula a idade

        echo "<p>Quem nasceu em <strong>$anoNascimento</strong> tem ou fará <strong>$idade</strong> anos em <strong>$anoAtual</strong>.</p>";
    ?>
</body>
</html>

