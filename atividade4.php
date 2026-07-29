<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor_original = 200;
    $desconto = $valor_original * 0.10;
    $valor_final = $valor_original - $desconto;

    echo "Valor com desconto: R$ $valor_final" . "<br>";

    var_dump($valor_final);
    ?>
</body>
</html>