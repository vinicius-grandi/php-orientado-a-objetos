<?php
class IsekaiMC {
    private $nome;
    private $idade;
    private $senha;

    public function __construct($nome, $idade, $senha) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->senha = $senha;
    }

    public function power() {
        echo "Ore wa $this->nome, $this->idade desu!!";
    }

    public function login() {
        if($this->nome == 'rodriguinho-san' && $this->senha) {
            echo "Login concluído";
    } else {
        echo "LOGIN FALHOU";
    }
}
}

$isekaiMC = new IsekaiMC('rodriguinho-san', '13 anos', '123456');

$isekaiMC->login();