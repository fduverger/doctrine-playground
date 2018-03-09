<?php
require_once 'bootstrap.php';

$productName = $argv[1];
$productCount = $entityManager->getRepository(Product::class)
                         ->count(['name' => $productName]);

echo $productCount. "\n";