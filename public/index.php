<?php
// pasta public para acesso apenas ao que vai  ser exposto
declare (strict_types=1);

require_once '../vendor/autoload.php';

//use Alfa\Conta;
//use Alfa\Util\Date;

use Alfa\Heranca\Funcionario;
use Alfa\Heranca\Gerente;
use Alfa\Heranca\Vendedor;
use Alfa\Heranca\CalculaBonificacao;

/*if ($minhaConta->sacar(100)){
    echo "Sacou \n";
} else {
    echo "Não sacou \n";
}
$minhaConta->depositar(0.99);
echo sprintf("Saldo atual: %s", $minhaConta->saldo);
var_dump($minhaConta);
var_dump($date);
pego pela lib de dev para mostrar mais organizado
dump($minhaConta);

$minhaConta = new Conta(1, "Janaina", 500.00); 

$contaDosSonhos = new Conta(2, "Baú da felicidade", 1_000_000_000.00);


$contaDosSonhos->transferir($minhaConta, 500_000.00);

dump($minhaConta);
dump($contaDosSonhos);
dump(conta::$movimentacoes);

echo $minhaConta->pegarSaldo();
*/

$calculaBonificacao = new CalculaBonificacao();
$funcionario = new Funcionario("João"); 
$gerente = new Gerente("José");
$vendedor = new Vendedor("Clarisse");

dump($calculaBonificacao->calcula($funcionario));
dump($calculaBonificacao->calcula($gerente));
dump($calculaBonificacao->calcula($vendedor));

//dump ($funcionario->getBoniticacao()) ;
//dump ($gerente->getBoniticacao());