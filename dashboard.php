<?php
session_start();


// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit;
}

// Conteúdo da página dashboard
echo '<h1>Bem-vindo ao Dashboard!</h1>';
echo '<p>Você está logado como ' . $_SESSION['usuario_id'] . '</p>';
?>
<a href="logout.php">Sair</a>