<?php
abstract class Bank {
    abstract protected function withdrawal($w);
    abstract protected function deposit($d);
}

class Itau extends Bank {
    private $balance;

    public function setBalance($b) {
        $this->balance = $b;
        echo $this->balance. "<hr>";
    }

    public function getBalance() {
        return $this->balance;
    }

    public function withdrawal($w) {
        echo $this->balance -= $w;
        echo " - Você sacou $w <hr>";
    }
    
    public function deposit($d) {
        echo $this->balance += $d;
        echo " - Você depositou $d <hr>";
    }
}

$itau = new Itau;
$itau->setBalance(1000);
$itau->deposit(100);
$itau->withdrawal(150);