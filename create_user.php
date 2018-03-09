<?php
require_once 'bootstrap.php';

$userName = $argv[1];

$user = new User();
$user->setName($userName);

$entityManager->persist($user);
$entityManager->flush();

echo 'Created user with ID '. $user->getId() . "\n";