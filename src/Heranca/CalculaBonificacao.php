<?php

declare(strict_types=1);

namespace Alfa\Heranca;

class CalculaBonificacao 
{
    public function calcula(Funcionario $funcionario) : float
    {
        return $funcionario->getBoniticacao();
    }
}