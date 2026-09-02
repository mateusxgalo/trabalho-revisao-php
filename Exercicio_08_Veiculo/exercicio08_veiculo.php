<?php

class Veiculo
{
    private float $quilometragem = 0;

    public function rodar(float $km): void
    {
        if ($km < 0) {
            return;
        }

        $this->quilometragem += $km;
    }

    public function exibirQuilometragem(): void
    {
        echo "Quilometragem total: " . $this->quilometragem . " km";
    }
}

$veiculo = new Veiculo();
$veiculo->rodar(50);
$veiculo->rodar(30);
$veiculo->exibirQuilometragem();

