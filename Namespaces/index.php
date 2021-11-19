<?php
require_once "classes\produto.php";
require_once "models\produto.php";

use classes\Produto as productModel;

$produtoC = new productModel;
$produtoC->mostraProduto();
