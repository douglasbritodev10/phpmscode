<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $guerreiro = [
        "nome" => "THOR",
        "vida" => 100,
        "forca" => 20
     ];
     $dano_critico = pow(($guerreiro["forca"] + $guerreiro["vida"]), 2);

     echo "Personagem: " . $guerreiro["nome"] . "<br>";
     echo "dano crítico: " . $dano_critico;
     ?>
</body>
</html>