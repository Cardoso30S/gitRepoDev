<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "academia_bd");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Query vulnerável a SQL Injection
    $sql = "SELECT * FROM usuarios WHERE nome_user = '$usuario' AND senha_user = '$senha'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "Login bem-sucedido!";
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Login">
    </form>

</body>

</html>