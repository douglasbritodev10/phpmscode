<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idade = 15;

    if ($idade < 12){
        echo "Criança";
    } elseif ($idade >= 12 && $idade < 18){
        echo "Adolescente";
    } else {
        echo "Adulto";
    }
    ?>
    
</body>
</html>