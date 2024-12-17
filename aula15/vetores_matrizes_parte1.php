<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes - Parte 1</title>
</head>
<body>

    <h1>Dados do Cadastro</h1>

    <div>
        <?php
        // Definindo um vetor associativo com chaves e valores
        $cad = array("nome" => "Ana",  // A chave 'nome' tem o valor 'Ana'
                    "idade" => 23,    // A chave 'idade' tem o valor 23
                    "peso" => 78.5);   // A chave 'peso' tem o valor 78.5

        // Adicionando mais um item ao vetor associativo
        $cad["fuma"] = true;  // A chave 'fuma' recebe o valor 'true'

        // Exibindo o conteúdo do vetor associativo
        echo "<p><strong>Nome:</strong> " . $cad["nome"] . "</p>"; 
        echo "<p><strong>Idade:</strong> " . $cad["idade"] . "</p>"; 
        echo "<p><strong>Peso:</strong> " . $cad["peso"] . "</p>"; 
        echo "<p><strong>Fuma:</strong> " . ($cad["fuma"] ? "Sim" : "Não") . "</p>"; 
        ?>
    </div>

</body>
</html>

