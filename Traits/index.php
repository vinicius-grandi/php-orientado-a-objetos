<?php
require_once "vendor/autoload.php";

use App\Animal\Cachorro;
use App\Pessoa\Cliente;

$cliente = new Cliente;
$cachorro = new Cachorro;

$cliente->setNome("Jaiminho");
$cachorro->setNome("Jooj");
$cliente->getNome(); echo '<br>';
$cachorro->getNome();