<?php

require_once "conexao.php";

$username = "admin";
$password = password_hash("123456", PASSWORD_DEFAULT);

try {
    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $password]);

    echo "Usuário de teste cadastrado com sucesso!";
} catch (PDOException $e) {
    echo "Não foi possível cadastrar. O usuário pode já existir.";
}
