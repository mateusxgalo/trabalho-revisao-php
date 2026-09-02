<?php

$dia = 3; // Altere para um número de 1 a 7.

switch ($dia) {
    case 1:
        echo "Segunda-feira: Frango grelhado";
        break;
    case 2:
        echo "Terça-feira: Fricassê";
        break;
    case 3:
        echo "Quarta-feira: Feijoada";
        break;
    case 4:
        echo "Quinta-feira: Carne de panela";
        break;
    case 5:
        echo "Sexta-feira: Strogonoff";
        break;
    case 6:
        echo "Sábado: Restaurante fechado";
        break;
    case 7:
        echo "Domingo: Restaurante fechado";
        break;
    default:
        echo "Número inválido. Digite um número de 1 a 7.";
}

