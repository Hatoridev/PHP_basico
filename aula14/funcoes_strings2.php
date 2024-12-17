<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções de String em PHP</title>
</head>
<body>

<h2>Manipulação de Strings em PHP</h2>

<?php
// Função substr(): Retorna uma parte específica de uma string
$str = "Curso de PHP para iniciantes";
$sub = substr($str, 0, 5);  // Extrai os 5 primeiros caracteres
echo "<p>A substring é: $sub</p>";  // Exibe "Curso"

// Função strtoupper(): Converte uma string para maiúsculas
$lower = "curso de php";
$upper = strtoupper($lower);  // Converte para "CURSO DE PHP"
echo "<p>A string em maiúsculas: $upper</p>";  // Exibe "CURSO DE PHP"

// Função strtolower(): Converte uma string para minúsculas
$upper = "CURSO DE PHP";
$lower = strtolower($upper);  // Converte para "curso de php"
echo "<p>A string em minúsculas: $lower</p>";  // Exibe "curso de php"

// Função ucfirst(): Converte o primeiro caractere de uma string para maiúscula
$str = "curso de php";
$capitalized = ucfirst($str);  // Converte para "Curso de php"
echo "<p>String com a primeira letra maiúscula: $capitalized</p>";  // Exibe "Curso de php"

// Função ucwords(): Converte a primeira letra de cada palavra de uma string para maiúscula
$str = "curso de php para iniciantes";
$capitalizedWords = ucwords($str);  // Converte para "Curso De Php Para Iniciantes"
echo "<p>String com cada palavra iniciando com maiúscula: $capitalizedWords</p>";  // Exibe "Curso De Php Para Iniciantes"

// Função strpos(): Retorna a posição da primeira ocorrência de uma substring em uma string
$str = "Curso de PHP para iniciantes";
$pos = strpos($str, "PHP");  // Retorna a posição inicial de "PHP" (13)
echo "<p>A posição de 'PHP' na string é: $pos</p>";  // Exibe "13"

// Função str_replace(): Substitui uma substring por outra em uma string
$str = "Curso de PHP para iniciantes";
$modified = str_replace("PHP", "JavaScript", $str);  // Substitui "PHP" por "JavaScript"
echo "<p>A string modificada é: $modified</p>";  // Exibe "Curso de JavaScript para iniciantes"

// Função trim(): Remove espaços em branco do início e do fim de uma string
$str = "   Curso de PHP   ";
$trimmed = trim($str);  // Remove os espaços antes e depois
echo "<p>A string sem espaços: '$trimmed'</p>";  // Exibe "Curso de PHP"
?>

</body>
</html>

