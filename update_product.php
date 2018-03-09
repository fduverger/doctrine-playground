<?php
require_once 'bootstrap.php';

$productId = $argv[1];
$productName = $argv[2];
$product = $entityManager->find('Product', $productId);

if($product === null)
{
    echo "Product with Id $productId not found. \n";
    exit(1);
}

$product->setName($productName);

$entityManager->flush();