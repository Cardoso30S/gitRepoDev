<?php
session_start();

if (!isset($_SESSION["comentarios"])) {
    $_SESSION["comentarios"] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $comentario = $_POST["comentario"];
    $_SESSION["comentarios"][] = $comentario;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Publicação de Comentários</title>
</head>

<body>
    <h1>Publicação de Comentários</h1>
    <form method="post">
        <textarea name="comentario" placeholder="Digite seu comentário" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Publicar Comentário">
    </form>

    <h2>Comentários</h2>
    <?php foreach ($_SESSION["comentarios"] as $comentario): ?>
        <p>
            <?php echo $comentario; ?>
        </p>
    <?php endforeach; ?>
</body>

</html>