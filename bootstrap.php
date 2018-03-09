<?php
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration([__DIR__.'/config/yaml'], $isDevMode);
$config->setProxyDir(__DIR__. '/proxies');
//$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ApcuCache());
// $config->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());

$conn = [
    'driver' => 'pdo_sqlite',
    'path'   => __DIR__.'/db.sqlite'
];

$entityManager = EntityManager::create($conn, $config);

