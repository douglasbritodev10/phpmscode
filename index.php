<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Seja Bem-vindo ao meu site!</h1>";

        // variáveis simulando a captura GET
        $nome = "João";
        $orcamento = 7000.00;
        $cupom = "MSCODE";

        const TAXA_CONVENIENCIA = 45.00;

        $catalago = [
            'GAMES' => [
                ['nome' => 'PS5', 'preco' => 4000.00, 'estoque' => 3],
                ['nome' => 'XBOX', 'preco' => 3500.00, 'estoque' => 0],
                ['nome' => 'NINTENDO SWITCH', 'preco' => 2500.00, 'estoque' => 2],
            ],
            'informatica' => [
                ['nome' => 'Notebook', 'preco' => 3000.00, 'estoque' => 5],
                ['nome' => 'Mouse', 'preco' => 150.00, 'estoque' => 10],
                ['nome' => 'Teclado', 'preco' => 200.00, 'estoque' => 8],
            ],
        ];
        
        $carrinhoFinal = [];
        $totalGasto = 0;

        echo "<h3>Olá, $nome! Seu orçamento é de R$ $orcamento</h3>";

        // O primeiro foreach varre os departamentos do catálogo
        foreach ($catalago as $departamento => $listaprodutos) {
            foreach ($listaprodutos as $produto) {
                // Verifica se o produto está em estoque
                if ($produto['estoque'] == 0) {
                    continue;
                }

                if ($produto['preco'] <= $orcamento && $produto['estoque'] > 0) {
                    $orcamento -= $produto['preco'];
                    $totalGasto += $produto['preco'];
                    $carrinhoFinal[] = $produto['nome'] . " - R$ " . $produto['preco'];
                
                echo "<li>Comprado: " . $produto['nome'] . " - R$ " . $produto['preco'] . "</li>";  
                }    
            }
        }

    ?>

</body>
</html>