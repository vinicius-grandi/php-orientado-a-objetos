<?php
require_once "vendor/autoload.php";

$produto = new App\Model\Produto();
$produto->setNome("Celular");
$produto->setDescricao("Celular bom bom muito bom");
$produto->setId(3);

$produtoDao = new \App\Model\ProdutoDao;
$res = $produtoDao->read();

foreach($res as $r) {
    echo $r['nome']. " <strong> \ </strong> ". $r['descricao']. "<hr>";

}