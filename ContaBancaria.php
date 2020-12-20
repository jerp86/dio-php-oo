<?php
class ContaBancaria {
  public $banco;
  public $nomeTitular = 'José Eduardo';
  public $numeroAgencia = '4567';
  public $numeroConta;
  public $saldo = 1000.00;
}

$conta = new ContaBancaria();

// var_dump($conta);
// var_dump($conta->nomeTitular);
var_dump($conta->saldo);

$conta->saldo = -500.00;

var_dump($conta->saldo);
