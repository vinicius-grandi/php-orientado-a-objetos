<?php
class Pessoa {
    public $idade;
    public function __clone() {
        echo "CLONEIIIII";
    }
}

$pessoa1 = new Pessoa;
$pessoa2 = clone $pessoa1;
$pessoa1->idade = 23;
$pessoa2->idade = 30;