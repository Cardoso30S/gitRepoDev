<!DOCTYPE html>
<html>

<head>
    <title>Calculadora Simples</title>
</head>

<body>
    <h1>Calculadora Simples</h1>
    <form action="calcular.php" method="post">
        <input type="number" name="num1" required>
        <select name="operacao">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>