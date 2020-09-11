<?php

declare (strict_types=1); //tipo de checagem do tipo

namespace Alfa; //package no java, faz parte do pacote Alfa

class Conta {
    //tipagem a partir do php 7.4
    public int    $numero;
    public string $titular;
    public float  $saldo;

    public static array $movimentacoes = [];
    //

    public function sacar(float $valor) : bool {
        if ($this->saldo < $valor) {
            return false;
        }

        $this->saldo -= $valor;
        self::$movimentacoes[] = sprintf("[%s] Saque %s", $this->titular, $valor);

        return true;
    }

    public function depositar(float $valor) : void {
        $this->saldo += $valor;
        self::$movimentacoes[] = sprintf("[%s] Depósito %s", $this->titular, $valor);
    }

    public function transferir(Conta $contaDestino, float $valor) : bool {

        $retirou = $this->sacar($valor);

        if ($retirou) {
            $contaDestino->depositar($valor);
        }
        return $retirou;
    }

}