<?php
// pasta public para acesso apenas ao que vai  ser exposto
declare (strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Conta;
use Alfa\Util\Date;

$minhaConta = new Conta(); 
$minhaConta->titular = "Janaina";
$minhaConta->saldo = 500.00;

/*if ($minhaConta->sacar(100)){
    echo "Sacou \n";
} else {
    echo "Não sacou \n";
}
$minhaConta->depositar(0.99);
echo sprintf("Saldo atual: %s", $minhaConta->saldo);
//var_dump($minhaConta);
//var_dump($date);
//pego pela lib de dev para mostrar mais organizado
//dump($minhaConta);*/

$contaDosSonhos = new Conta();
$contaDosSonhos->saldo = 1_000_000_000.00;
$contaDosSonhos->titular = "Baú da Felicidade";

$contaDosSonhos->transferir($minhaConta, 500_000.00);

dump($minhaConta);
dump($contaDosSonhos);
dump(conta::$movimentacoes);
