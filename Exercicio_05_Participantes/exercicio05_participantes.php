<?php

$participantes = [
    ["nome" => "Ana", "pontos" => 850],
    ["nome" => "João", "pontos" => 920],
    ["nome" => "Maria", "pontos" => 780],
];

usort($participantes, function (array $a, array $b): int {
    return $b["pontos"] <=> $a["pontos"];
});

foreach ($participantes as $indice => $participante) {
    $posicao = $indice + 1;

    echo $posicao . "º lugar - ";
    echo $participante["nome"] . " - ";
    echo $participante["pontos"] . " pontos<br>";
}

