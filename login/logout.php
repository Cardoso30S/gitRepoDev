<?php
session_start(); // Inicia a sessão

// Encerra a sessão
session_unset();
session_destroy();

header("Location:index.php");
exit();
?>