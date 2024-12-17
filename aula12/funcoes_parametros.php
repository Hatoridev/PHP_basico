<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Funções em PHP</title>
</head>
<body>

<div>
<?php
// Definindo a função 'teste' que recebe um parâmetro e realiza uma operação sobre ele
function teste($x) {
    $x += 2;  // Incrementa o valor de $x por 2
    echo "<p>O valor de X é $x</p>";  // Exibe o valor de $x após a operação
}

// Definindo uma variável $a com valor 3
$a = 3;

// Chamando a função 'teste' e passando a variável $a como argumento
teste($a);  // A função irá modificar $x, mas não $a diretamente

// Exibindo o valor da variável $a após a chamada da função
echo "<p>O valor de A é $a</p>";  // Este valor de $a não será alterado pela função
?>
</div>

</body>
</html>

