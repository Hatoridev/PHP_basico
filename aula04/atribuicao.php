<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação de caracteres para UTF-8 -->
    <meta charset="UTF-8">
    <!-- Título da página que aparece na aba do navegador -->
    <title>Operadores de Atribuição em PHP</title>
</head>
<body>
    <!-- Título principal exibido na página -->
    <h1>Operadores de Atribuição, Incremento e Outros Conceitos</h1>

    <?php
        // ----------------------------------
        // 1. Operadores de Atribuição
        // ----------------------------------

        // Operador += : Adiciona um valor a uma variável existente
        $c = 10; // Variável $c inicializada com o valor 10
        $c += 5; // Equivalente a $c = $c + 5
        echo "Resultado de \$c += 5: $c <br>"; // Exibe o resultado (15)

        // Operador -= : Subtrai um valor de uma variável existente
        $c -= 2; // Equivalente a $c = $c - 2
        echo "Resultado de \$c -= 2: $c <br>"; // Exibe o resultado (13)

        // Operador *= : Multiplica a variável por um valor
        $c *= 3; // Equivalente a $c = $c * 3
        echo "Resultado de \$c *= 3: $c <br>"; // Exibe o resultado (39)

        // Operador /= : Divide a variável por um valor
        $c /= 3; // Equivalente a $c = $c / 3
        echo "Resultado de \$c /= 3: $c <br>"; // Exibe o resultado (13)

        // Operador %= : Calcula o resto da divisão
        $c %= 4; // Equivalente a $c = $c % 4
        echo "Resultado de \$c %= 4: $c <br>"; // Exibe o resultado (1)

        // Operador .= : Concatena valores em uma string
        $nome = "João"; // Variável $nome recebe "João"
        $nome .= " Silva"; // Concatena " Silva" à variável $nome
        echo "Resultado de concatenação com .= : $nome <br>"; // Exibe "João Silva"

        // ----------------------------------
        // 2. Operadores de Incremento e Decremento
        // ----------------------------------

        // Pré-incremento (++ antes da variável)
        $a = 5;
        echo "Pré-incremento de \$a (++\$a): " . ++$a . "<br>"; // Incrementa antes e exibe 6

        // Pós-incremento (++ depois da variável)
        echo "Pós-incremento de \$a (\$a++): " . $a++ . "<br>"; // Exibe 6 e depois incrementa
        echo "Valor de \$a após pós-incremento: $a <br>"; // Agora $a vale 7

        // Pré-decremento (-- antes da variável)
        echo "Pré-decremento de \$a (--\$a): " . --$a . "<br>"; // Decrementa antes e exibe 6

        // Pós-decremento (-- depois da variável)
        echo "Pós-decremento de \$a (\$a--): " . $a-- . "<br>"; // Exibe 6 e depois decrementa
        echo "Valor de \$a após pós-decremento: $a <br>"; // Agora $a vale 5

        // ----------------------------------
        // 3. Comentários em PHP
        // ----------------------------------

        // Comentário de uma linha usando //
        # Comentário de uma linha usando #

        /* 
           Comentário em bloco.
           Pode ocupar várias linhas
        */

        echo "Comentários servem para documentar o código. Veja o código-fonte!<br>";

        // ----------------------------------
        // 4. Variáveis Referenciadas
        // ----------------------------------

        $x = 3; // Variável $x recebe 3
        $y = $x; // $y recebe uma cópia do valor de $x
        $z = &$x; // $z se torna uma referência à variável $x

        $x = 5; // Altera o valor de $x
        echo "Valor de \$y (cópia de \$x): $y <br>"; // $y permanece com 3
        echo "Valor de \$z (referência de \$x): $z <br>"; // $z também muda para 5

        // ----------------------------------
        // 5. Variáveis de Variáveis
        // ----------------------------------

        $nome = "usuario"; // Variável $nome com o valor "usuario"
        $$nome = "programador"; // Cria a variável $usuario com o valor "programador"

        // Exibe o valor da variável dinâmica
        echo "O conteúdo de \$nome é: $nome <br>"; // Exibe "usuario"
        echo "O conteúdo de \$usuario é: $usuario <br>"; // Exibe "programador"
    ?>
</body>
</html>

