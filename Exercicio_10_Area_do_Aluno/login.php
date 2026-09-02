<?php

require_once __DIR__ . "/Usuario.php";

session_start();
date_default_timezone_set("America/Sao_Paulo");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nomeUsuario"] ?? "");

    if ($nome === "") {
        $mensagem = "Informe o nome do usuário.";
    } else {
        $usuario = new Usuario($nome);

        if ($usuario->autenticar()) {
            $ultimoAcesso = $_COOKIE["ultimo_acesso"] ?? "Primeiro acesso";

            $_SESSION["nomeUsuario"] = $usuario->nomeUsuario;
            $_SESSION["logado"] = $usuario->logado;
            $_SESSION["ultimoAcesso"] = $ultimoAcesso;

            $acessoAtual = date("d/m/Y H:i:s");

            setcookie(
                "ultimo_acesso",
                $acessoAtual,
                [
                    "expires" => time() + (30 * 24 * 60 * 60),
                    "path" => "/",
                    "httponly" => true,
                    "samesite" => "Lax",
                ]
            );

            $mensagem = "Login realizado com sucesso!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="cartao">
        <h1>Área do aluno</h1>

        <?php if (empty($_SESSION["logado"])): ?>
            <form method="POST" action="login.php">
                <label for="nomeUsuario">Nome do usuário:</label>
                <input
                    type="text"
                    id="nomeUsuario"
                    name="nomeUsuario"
                    required
                    autocomplete="username"
                >
                <button type="submit">Entrar</button>
            </form>
        <?php else: ?>
            <h2>
                Bem-vindo,
                <?= htmlspecialchars($_SESSION["nomeUsuario"], ENT_QUOTES, "UTF-8") ?>!
            </h2>

            <p>
                <strong>Último acesso:</strong>
                <?= htmlspecialchars($_SESSION["ultimoAcesso"], ENT_QUOTES, "UTF-8") ?>
            </p>

            <p><strong>Status:</strong> Autenticado</p>
            <a class="botao sair" href="logout.php">Sair</a>
        <?php endif; ?>

        <?php if ($mensagem !== ""): ?>
            <p class="mensagem">
                <?= htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") ?>
            </p>
        <?php endif; ?>
    </main>
</body>
</html>

