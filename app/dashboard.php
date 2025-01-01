<?php
session_start();

include_once('header.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../index.php');
    exit;
}

// Conteúdo da página dashboard
// echo '<h1>Bem-vindo ao Dashboard!</h1>';
// echo '<p>Você está logado como ' . $_SESSION['usuario_id'] . '</p>';


?>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="#" style="color: #fff; text-decoration: none;">Dashboard</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">Settings</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">Profile</a></li>
                <li><a href="logout.php" style="color: #fff; text-decoration: none;">Logout</a></li>
            </ul>
        </nav>

        <main class="main-content">
            <div class="card">
                <h2>Card Title 1</h2>
                <p>Some information goes here.</p>
            </div>
            <div class="card">
                <h2>Card Title 2</h2>
                <p>Some information goes here.</p>
            </div>
            <div class="card">
                <h2>Card Title 3</h2>
                <p>Some information goes here.</p>
            </div>
        </main>
    </div>

<?php include_once('footer.php'); ?>
