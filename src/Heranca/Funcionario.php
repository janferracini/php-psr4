<?php

declare (strict_types=1);

namespace Alfa\Heranca;

class Funcionario
{
    private string $nome;


    public function __construct( string $nome)
    {
        $this->nome = $nome;
    }

    public function getSalario() : float
    {
        return 1000.00;
    }

    public function getBoniticacao() : float
    {
        return $this->getSalario() * 1.3 ;
    }

}