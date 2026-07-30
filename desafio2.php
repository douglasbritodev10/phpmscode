<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $perfil = "admin";

    switch ($perfil) {
        case "admin";
        echo "Bem-vindo, administrador!";
        break;
        
        default:

        echo "Acesso negado: Perfil não autorizado.";
        break;
    };
    ?>
</html>