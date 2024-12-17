<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>

<?php
// Verifica se os dados necessários foram passados via GET
if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['cor']) && isset($_GET['data']) && isset($_GET['sexo'])) {
    
    // Coleta os dados passados pela URL através do método GET
    $nome = $_GET['nome']; // Coleta o valor do parâmetro 'nome'
    $idade = $_GET['idade']; // Coleta o valor do parâmetro 'idade'
    $cor = $_GET['cor']; // Coleta o valor do parâmetro 'cor' (formato hexadecimal para cor)
    $data = $_GET['data']; // Coleta o valor do parâmetro 'data' (data de nascimento)
    $sexo = $_GET['sexo']; // Coleta o valor do parâmetro 'sexo'

    // Exibe os dados coletados de forma formatada
    echo "<h1>Dados Recebidos</h1>"; // Título indicando que os dados foram recebidos
    echo "<p><strong>Nome:</strong> $nome</p>"; // Exibe o nome
    echo "<p><strong>Idade:</strong> $idade</p>"; // Exibe a idade
    echo "<p><strong>Cor favorita:</strong> <span style='background-color: $cor;'>$cor</span></p>"; // Exibe a cor com o fundo da cor informada
    echo "<p><strong>Data de nascimento:</strong> $data</p>"; // Exibe a data de nascimento
    echo "<p><strong>Sexo:</strong> $sexo</p>"; // Exibe o sexo

    // Cálculo da idade com base no ano atual e na data de nascimento
    $anoAtual = date("Y"); // Obtém o ano atual
    $anoNascimento = date("Y", strtotime($data)); // Extrai o ano da data de nascimento informada
    $idadeCalculada = $anoAtual - $anoNascimento; // Calcula a idade subtraindo o ano de nascimento do ano atual
    
    // Exibe a idade calculada
    echo "<p><strong>Idade calculada a partir da data de nascimento:</strong> $idadeCalculada anos</p>";
    
} else {
    // Caso algum dado necessário não tenha sido passado, exibe uma mensagem de erro
    echo "<p>Por favor, forneça os dados na URL no formato correto.</p>";
    // Exibe um exemplo de como a URL deve ser formatada
    echo "<p>Exemplo de URL: processa_dados.php?nome=Joao&idade=25&cor=%23ff5733&data=1999-08-15&sexo=masculino</p>";
}
?>

</body>
</html>

