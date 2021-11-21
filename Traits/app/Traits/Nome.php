<?php
namespace App\Traits;
trait Nome {
    private $nome;

    public function setNome($n) {
        $this->nome = $n;
    }
    public function getNome() {
        echo $this->nome;
    }
}