<?php
class IsekaiMC {
    public $nome;
    public $idade;

    public function power(){
        echo "Ore wa $this->nome, $this->idade desu!!";
    }
}

$isekaiMC = new IsekaiMC();

$isekaiMC->nome = "Rodriguinho-san";
$isekaiMC->idade = "16 anos";
$isekaiMC->power();