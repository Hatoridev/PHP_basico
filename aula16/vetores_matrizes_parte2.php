<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Vetores e Matrizes - Parte 2</title>
</head>
<body>

<div>
    <pre>
        <?php
        // Criando um vetor associativo com chaves explícitas
        $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");

        // Exibindo o vetor original
        echo "Vetor original: \n";
        print_r($v);

        // Ordenando o vetor de forma crescente pelos valores (sort)
        echo "Vetor ordenado com 'sort()': \n";
        sort($v);  // sort() ordena os valores, mas descarta as chaves
        print_r($v);

        // Ordenando o vetor associativo pelas chaves (ksort)
        echo "Vetor ordenado com 'ksort()' pelas chaves: \n";
        $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K"); // Resetando o vetor
        ksort($v);  // ksort() ordena pelo índice (chave) e mantém a associação
        print_r($v);

        // Ordenando de forma reversa pelos valores (rsort)
        echo "Vetor ordenado com 'rsort()' de forma reversa: \n";
        rsort($v);  // rsort() ordena os valores em ordem decrescente
        print_r($v);

        // Ordenando de forma reversa pelas chaves (krsort)
        echo "Vetor ordenado com 'krsort()' de forma reversa pelas chaves: \n";
        krsort($v);  // krsort() ordena as chaves de forma decrescente
        print_r($v);

        // Criando um vetor usando a sintaxe curta (PHP 5.4+)
        $vShort = [10 => "Apple", 2 => "Banana", 5 => "Cherry"]; // short array syntax
        echo "Vetor com sintaxe curta: \n";
        print_r($vShort);

        // Ordenando o vetor com a sintaxe curta em ordem crescente
        echo "Vetor com sintaxe curta ordenado com 'sort()': \n";
        sort($vShort);
        print_r($vShort);

        // Criando um vetor de variáveis com chaves associativas e utilizando array_push
        $cad = ["nome" => "Ana", "idade" => 23, "peso" => 78.5];
        $cad["fuma"] = true;  // Adicionando mais um item ao vetor associativo
        echo "Vetor associativo com chave 'fuma' adicionada: \n";
        print_r($cad);
        
        // Adicionando elementos ao vetor utilizando o array_push
        $cad["email"] = "ana@example.com";
        echo "Vetor após adicionar 'email': \n";
        print_r($cad);

        // Trabalhando com uma lista numerada com a sintaxe curta
        $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
        echo "Lista de frutas: \n";
        print_r($frutas);
        
        // Adicionando um novo item ao final da lista
        array_push($frutas, "Pera");
        echo "Lista de frutas após adicionar 'Pera': \n";
        print_r($frutas);
        ?>
    </pre>
</div>

</body>
</html>

