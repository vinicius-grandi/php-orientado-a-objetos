<?php
require_once "vendor/autoload.php";

$produto = new App\Model\Produto();
$produto->setNome("Celular");
$produto->setDescricao("Muito ruim");
$produto->setId("2");

$produtoDao = new \App\Model\ProdutoDao;
// $produtoDao->delete(1);
// $produtoDao->update($produto);
// $res = $produtoDao->read();

// foreach($res as $r) {
//     echo $r['nome']. " <strong> \ </strong> ". $r['descricao']. "<hr>";

// }