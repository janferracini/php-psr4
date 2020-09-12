<?php

declare (strict_types=1); //tipo de checagem do tipo

namespace Alfa; //package no java, faz parte do pacote Alfa

class Conta {
    //tipagem a partir do php 7.4
    private int    $numero;
    private string $titular;
    private float  $saldo;
    private float  $taxa = 5.00;
    private float  $limite = 1000.00;
    public static array $movimentacoes = [];

    public function __construct( int $numero, string $titular, float $saldo )
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    //

    public function sacar(float $valor) : bool {
        if (!$this->possuiSaldo($valor)) {
            return false;
        }

        $this->saldo -= $valor;
        self::$movimentacoes[] = sprintf("[%s] Saque %s", $this->titular, $valor);

        return true;
    }

    private function possuiSaldo(float $valor) : bool
    {
        return ($this->pegarSaldo() >= $valor);
    }


    public function depositar(float $valor) : void
    {
        $this->saldo += $valor;
        self::$movimentacoes[] = sprintf("[%s] Depósito %s", $this->titular, $valor);
    }

    public function transferir(Conta $contaDestino, float $valor) : bool
    {

        $retirou = $this->sacar($valor);

        if ($retirou)
        {
            $contaDestino->depositar($valor);
        }
        return $retirou;
    }

    public function pegarSaldo() :float
    {
        return $this->saldo - $this->taxa + $this->limite;
    }

}