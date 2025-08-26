<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Login</title>
</head>

<body>
    <form action="processar_login.php" method="post">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Entrar">
    </form>
</body>

</html>