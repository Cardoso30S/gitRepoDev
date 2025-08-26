<?php
// Inicia a sessão para acessar a variável de sessão
session_start();

// Verifica se o usuário está logado (tem uma sessão ativa)
if (!isset($_SESSION["username"])) {
    // Redireciona de volta para a página de login
    header("Location: index.php");
    exit();
} 

// Exibe uma mensagem de boas-vindas
echo "Bem-vindo, " . $_SESSION["username"] . "!";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Página de Boas-Vindas</title>
</head>

<body>
    <h1>Página de Boas-Vindas</h1>
    <p>Esta é a página de boas-vindas para o usuário:
        <?php echo $_SESSION["username"]; ?>
    </p>
    <a href="logout.php">Sair</a>
</body>

</html>