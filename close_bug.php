<?php
require_once 'bootstrap.php';

$bugId = $argv[1];

$bug = $entityManager->find('Bug', $bugId);
$bug->close();

$entityManager->flush();

echo 'Bug with Id '. $bugId . " has been closed.\n";