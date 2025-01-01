<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];



    // Hash da senha para comparação segura
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);
    $stmt->execute();

    // Execução da consulta
    if ($stmt->execute()) {
        echo "Usuário inserido com sucesso!";
    } else {
        echo "Erro ao inserir usuário: " . print_r($stmt->errorInfo(), true);
    }
}
