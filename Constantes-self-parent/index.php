<?php
class Pessoa {
    const nome = 'joãozin';
    
    public function mostraNome() {
        echo self::nome;
    }
}

class Rodrigo extends Pessoa {

    public function mostraNome() {
        echo parent::nome;
    }
}

class Jorge extends Rodrigo {
    const nome = "lulu";

    public function mostraNome() {
        echo self::nome;
    }
}

$pessoa = new Jorge;
$pessoa->mostraNome();