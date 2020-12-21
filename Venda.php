<?php
class Venda {
  private $data;
  private $produto;
  private $quantidade;
  private $valorTotal;

  public function __construct($data, $produto, $quantidade, $valorTotal) {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->valorTotal = $valorTotal;
  }

  public function obterVenda() {
    return 'No dia ' . $this->data . ' foram vendidos ' . $this->quantidade . ' ' . $this->produto . ' no valor total de R$ ' . $this->valorTotal;
  }
}

$venda = new Venda('20/12/2020', 'Cupcake', 3, 21.00);

echo $venda->obterVenda();

?>
