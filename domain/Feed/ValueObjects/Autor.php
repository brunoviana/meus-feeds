<?php

namespace Domain\Feed\ValueObjects;

class Autor
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function nome()
    {
        return $this->nome;
    }
}
