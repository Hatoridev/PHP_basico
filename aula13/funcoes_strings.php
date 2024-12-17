<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Manipulação de Strings em PHP</title>
</head>
<body>

<div>
<?php
// Função printf(): Exibe uma string formatada
$name = "João";
$age = 25;
printf("Nome: %s, Idade: %d anos.", $name, $age);  // Exibe: Nome: João, Idade: 25 anos.

// Função print_r(): Exibe arrays e objetos de forma legível
$array = array("maçã", "banana", "laranja");
echo "<pre>";
print_r($array);  // Exibe o conteúdo do array
echo "</pre>";

// Função wordwrap(): Adiciona quebras de linha em uma string
$text = "Esta é uma string muito longa que precisa ser quebrada em várias linhas.";
echo wordwrap($text, 20, "<br>");  // Quebra a string a cada 20 caracteres, colocando <br> como separador.

// Função strlen(): Retorna o tamanho de uma string
$string = "Olá, Mundo!";
echo "<p>O tamanho da string '$string' é: " . strlen($string) . " caracteres.</p>";  // Exibe o tamanho da string.

// Função trim(): Remove espaços em branco do início e final da string
$trimmed_string = "   PHP é ótimo!   ";
echo "<p>String sem espaços: '" . trim($trimmed_string) . "'</p>";  // Remove espaços ao redor da string.

// Função ltrim(): Remove espaços em branco no início da string
$ltrimmed_string = "   PHP é ótimo!";
echo "<p>String com ltrim: '" . ltrim($ltrimmed_string) . "'</p>";  // Remove espaços do começo da string.

// Função rtrim(): Remove espaços em branco no final da string
$rtrimmed_string = "PHP é ótimo!   ";
echo "<p>String com rtrim: '" . rtrim($rtrimmed_string) . "'</p>";  // Remove espaços do final da string.

// Função str_word_count(): Conta as palavras em uma string
$sentence = "PHP é uma linguagem poderosa!";
echo "<p>A string '$sentence' tem " . str_word_count($sentence) . " palavras.</p>";  // Conta as palavras na string.

// Função explode(): Divide uma string em um array
$fruit_string = "maçã,banana,laranja";
$fruits = explode(",", $fruit_string);  // Divide a string por vírgulas
echo "<p>Array de frutas:</p><pre>";
print_r($fruits);  // Exibe o array gerado
echo "</pre>";

// Função str_split(): Divide uma string em um array de caracteres
$letters = str_split("PHP");  // Divide cada letra em um item do array
echo "<p>Array de letras:</p><pre>";
print_r($letters);  // Exibe o array de letras
echo "</pre>";

// Função implode(): Junta um array de volta em uma string
$colors = array("azul", "vermelho", "verde");
$colors_string = implode(", ", $colors);  // Junta o array em uma string, separando com vírgula
echo "<p>Cores: $colors_string</p>";  // Exibe a string gerada

// Função chr(): Retorna o caractere correspondente ao código ASCII
$ascii_code = 65;
echo "<p>O caractere para o código ASCII $ascii_code é: " . chr($ascii_code) . "</p>";  // Exibe 'A'

// Função ord(): Retorna o código ASCII de um caractere
$character = "A";
echo "<p>O código ASCII do caractere '$character' é: " . ord($character) . "</p>";  // Exibe 65
?>
</div>

</body>
</html>

