<?php
require_once 'bootstrap.php';

$productId = $argv[1];

$product = $entityManager->find('Product', $productId);

if($product === null)
{
    echo "Not product found. \n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());

