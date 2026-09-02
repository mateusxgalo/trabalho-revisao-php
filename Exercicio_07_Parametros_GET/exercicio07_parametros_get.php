<?php

$id = $_GET["id"] ?? null;
$categoria = $_GET["categoria"] ?? null;

if ($id === null || $categoria === null) {
    echo "Informe id e categoria na URL.";
} else {
    echo "Produto " . htmlspecialchars($id) .
         " da categoria " . htmlspecialchars($categoria);
}

