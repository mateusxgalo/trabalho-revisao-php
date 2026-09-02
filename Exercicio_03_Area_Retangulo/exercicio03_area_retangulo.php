<?php

function areaRetangulo(float $base, float $altura): float|string
{
    if ($base < 0 || $altura < 0) {
        return "Valores inválidos";
    }

    return $base * $altura;
}

$resultado1 = areaRetangulo(10, 5);
$resultado2 = areaRetangulo(8, 4);
$resultado3 = areaRetangulo(-6, 3);

echo "Primeiro resultado: " . $resultado1 . "<br>";
echo "Segundo resultado: " . $resultado2 . "<br>";
echo "Terceiro resultado: " . $resultado3 . "<br>";

