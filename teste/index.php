<?php
// get/index.php
// Página com formulário usando método GET (dados aparecem na URL)

$nome = isset($_GET['nome']) ? trim($_GET['nome']) : '';
$msg  = '';

if ($nome !== '') {
  // Só para demonstrar “sticky” no input via GET
  $msg = "Dica: repare na URL acima. O parâmetro ?nome=" . urlencode($nome) . " está visível.";
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Método GET - Demonstração</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body{font-family:system-ui,Arial,sans-serif;margin:30px;line-height:1.5}
    .bar{background:#f4f6f8;border:1px solid #d9dee3;border-radius:8px;padding:10px;margin:16px 0;font-family:monospace}
    input[type=text]{padding:8px;border:1px solid #ccc;border-radius:6px}
    button{padding:8px 12px;border:0;border-radius:6px;background:#0d6efd;color:#fff;cursor:pointer}
    .hint{color:#333;font-size:.95rem}
  </style>
</head>
<body>
  <h1>Métodos de Envio de Dados — GET</h1>

  <p>
    O método <strong>GET</strong> envia os dados pela URL. Ideal para buscas e solicitações de recursos.
    Os dados ficam visíveis na barra de endereços e têm limite de tamanho.
  </p>

  <form action="processar_get.php" method="get">
    <input type="text" name="nome" placeholder="Seu nome" value="<?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Enviar</button>
  </form>

  <?php if ($msg): ?>
    <p class="hint"><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
  <?php endif; ?>

  <div class="bar">
    Exemplo de URL após enviar:<br>
    http://localhost/Aula%20PHP/get/processar_get.php?nome=Prof+Luis+Felipe+Cardoso
  </div>
</body>
</html>
