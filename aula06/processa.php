<?php
// Verifica se os dados do formulário foram enviados via GET
if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['cor']) && isset($_GET['data']) && isset($_GET['sexo'])) {
    // Coleta os valores enviados pelo formulário
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $cor = $_GET['cor'];
    $data = $_GET['data'];
    $sexo = $_GET['sexo'];

    // Exibe as informações recebidas
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
    echo "<p><strong>Cor favorita:</strong> <span style='background-color: $cor;'>$cor</span></p>";
    echo "<p><strong>Data de nascimento:</strong> $data</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";

    // Calcula a idade com base no ano de nascimento
    $anoAtual = date("Y"); // Obtém o ano atual
    $anoNascimento = date("Y", strtotime($data)); // Extrai o ano da data informada
    $idadeCalculada = $anoAtual - $anoNascimento; // Calcula a idade
    echo "<p><strong>Idade calculada a partir da data de nascimento:</strong> $idadeCalculada anos</p>";
} else {
    // Exibe uma mensagem de erro se os dados não foram enviados
    echo "<p>Por favor, preencha o formulário e envie os dados.</p>";
}
?>

