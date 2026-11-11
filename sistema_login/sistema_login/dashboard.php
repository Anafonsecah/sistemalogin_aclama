<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$nome = htmlspecialchars($_SESSION["username"], ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container text-center">
    <main class="login-box">
        <h2>Bem-vindo, <?= $nome ?>!</h2>
        <p>Você realizou o login com sucesso.</p>
        <a href="logout.php" class="btn btn-danger w-100">Sair</a>
    </main>
</div>
</body>
</html>
