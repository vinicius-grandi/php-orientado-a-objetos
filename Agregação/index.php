<?php
class Produto {
    public $nome;
    public $valor;

    function __construct($n, $v) {
        $this->nome = $n;
        $this->valor = $v;
    }
}

class Carrinho {
    public $produtos;

    public function addProdutos(Produto $p) {
        $this->produtos[] = $p;
    }

    public function mostrarProduto() {
        foreach($this->produtos as $produto) {
            echo $produto->nome. "<hr>";
            echo $produto->valor. "<hr>";
        }
    }
}

$prod1 = new Produto("Notebook", 1500);
$prod2 = new Produto("Carro", 45000);
$carrinho = new Carrinho;

$carrinho->addProdutos($prod1);
$carrinho->addProdutos($prod2);

$carrinho->mostrarProduto();
