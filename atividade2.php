<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      define("EMPRESA", "MSCODE");
      
      $equipamento = ["Computador", "Notebook", "Impressora"];

      echo "A " . EMPRESA . " fornece: " . $equipamento[0];

    ?>
</body>
</html>