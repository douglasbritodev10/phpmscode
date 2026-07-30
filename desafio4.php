<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$estoque = array(
    "Computador" =>10,
    "Notebook" => 0,
    "Impressora" => 2,
    "mouse" => 0
);

echo "Relatorio do estoque: <br>";

foreach ($estoque as $produtos => $quantidade) {
    if ($quantidade == 0) {
        echo "O item $produtos, está esgotado.<br>";
    } else {
        echo "O item $produtos, possui $quantidade unidades em estoque.<br>";
    }
}
?>

</body>
</html>