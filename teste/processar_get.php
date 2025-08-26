<?php
// get/processar_get.php
// Script que recebe os dados enviados por GET

$nome = isset($_GET['nome']) ? trim($_GET['nome']) : '';

function e($s)
{
    return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Resultado (GET)</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            font-family: system-ui, Arial, sans-serif;
            margin: 30px;
            line-height: 1.6
        }

        .bar {
            background: #f4f6f8;
            border: 1px solid #d9dee3;
            border-radius: 8px;
            padding: 10px;
            margin: 16px 0;
            font-family: monospace
        }

        a {
            color: #0d6efd;
            text-decoration: none
        }
    </style>
</head>

<body>
    <h2>Resultado do envio por GET</h2>

    <?php if ($nome === ''): ?>
        <p>Você não informou o nome. <a href="index.php">Voltar</a></p>
    <?php else: ?>
        <p>Olá, <strong><?= e($nome) ?></strong>!</p>
    <?php endif; ?>

    <div class="bar">
        URL atual:<br>
        <?= e((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>
    </div>

    <p><a href="index.php?nome=Prof+Luis+Felipe+Cardoso">Tentar com um exemplo pronto</a></p>
    <p><a href="index.php">Voltar ao formulário</a></p>
</body>

</html>