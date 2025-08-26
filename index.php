<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP - Prof. Luis</title>
</head>

<body>
    <h1> Primeira Aula com PHP</h1>
    <p><?php echo "Olá Mundo PHP"; ?></p>

    <?php
    $nome = "Luis";     //String
    $idade = 31;        //Integer
    $Altura = 1.90;     //Float
    $_estudante = true; //Boolean
    
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos<br>";
    ?>

    <?php
    $idade = 18;

    if ($idade < 18) {
        echo "Menor de idade";
    } elseif ($idade == 18) {
        echo "Acabou de atingir a maioridade";
    } else {
        echo "Maior de idade";
    }
    ?>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Número: $i <br>";
    }

    $contador = 1;

    while ($contador <= 5) {
        echo "Contador: $contador <br>";
        $contador++;
    }

    $i = 1;
    do {
        echo "Valor: $i <br>";
        $i++;
    } while ($i <= 5);
    ?>

    <?php
    $dia = 3;

    switch ($dia) {
        case 1:
            echo "Segunda-feira";
            break;
        case 2:
            echo "Terça-feira";
            break;
        case 3:
            echo "Quarta-feira";
            break;
        default:
            echo "Outro dia";
    }
    ?>




</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculo_media.php" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="numbr" name="nota1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" required><br>

        <input type="submit" value="Calcular">
    </form>

</body>

</html>