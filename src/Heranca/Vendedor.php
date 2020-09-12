<?php

declare(strict_types=1);

namespace Alfa\Heranca;

class Vendedor extends Funcionario
{
    public function getBoniticacao() : float
    {
        return parent::getBoniticacao()*1.2;
        //acessa a classe PAI e atribui a bonificação em cima dela
    }
}