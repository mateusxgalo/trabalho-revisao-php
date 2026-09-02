<?php

session_start();

$nomeUsuario = $_SESSION["nomeUsuario"] ?? "Não informado";
$logado = $_SESSION["logado"] ?? false;
$ultimoAcesso = $_COOKIE["ultimo_acesso"] ?? "Não registrado";

$_SESSION = [];

if (ini_get("session.use_cookies")) {
    $parametros = session_get_cookie_params();

    setcookie(
        session_name(),
        "",
        time() - 3600,
        $parametros["path"],
        $parametros["domain"],
        $parametros["secure"],
        $parametros["httponly"]
    );
}

session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="cartao">
        <h1>Logout</h1>
        <h2>Dados antes de encerrar a sessão</h2>

        <p>
            <strong>Nome do usuário:</strong>
            <?= htmlspecialchars($nomeUsuario, ENT_QUOTES, "UTF-8") ?>
        </p>

        <p><strong>Estava autenticado:</strong> <?= $logado ? "Sim" : "Não" ?></p>

        <p>
            <strong>Cookie do último acesso:</strong>
            <?= htmlspecialchars($ultimoAcesso, ENT_QUOTES, "UTF-8") ?>
        </p>

        <p class="mensagem">Sessão encerrada completamente.</p>
        <a class="botao" href="login.php">Entrar novamente</a>
    </main>
</body>
</html>

