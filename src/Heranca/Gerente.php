<?php

declare(strict_types=1);

namespace Alfa\Heranca;

class Gerente extends Funcionario
{
    public function getBoniticacao() : float
    {
        return parent::getBoniticacao()*1.3;
        //acessa a classe PAI e atribui a bonificação em cima dela
    }
}