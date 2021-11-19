<?php
class Pessoa {
    public $nome;
}

class AtribuiNome {
    public $pessoa;
    public function chamarNome() {
        $this->pessoa = new Pessoa;
        $this->pessoa->nome = "Jaime";
        echo $this->pessoa->nome;
    }
}

$anome = new AtribuiNome;
$anome->chamarNome();