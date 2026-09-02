<?php

$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];

foreach ($itens as $item) {
    if ($item === "Cabo HDMI") {
        continue;
    }

    echo $item . "<br>";
}

