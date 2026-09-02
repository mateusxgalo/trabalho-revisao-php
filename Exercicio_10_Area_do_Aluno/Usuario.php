<?php

class Usuario
{
    public string $nomeUsuario;
    public bool $logado = false;

    public function __construct(string $nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function autenticar(): bool
    {
        $this->logado = true;

        return $this->logado;
    }
}

