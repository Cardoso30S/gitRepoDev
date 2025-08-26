<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if ($operacao === "soma") {
        $resultado = $num1 + $num2;
    } elseif ($operacao === "subtracao") {
        $resultado = $num1 - $num2;
    } elseif ($operacao === "multiplicacao") {
        $resultado = $num1 * $num2;
    } elseif ($operacao === "divisao") {
        $resultado = $num1 / $num2;
    }

    echo "Resultado: $resultado";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        $media = ($nota1 + $nota2) / 2;

        echo "A média das notas é: $media";
    }
    ?>
</body>

</html>