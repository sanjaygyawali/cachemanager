<?php

// namespace Sanjaygyawali\Cachemanager;

use Sanjaygyawali\Cachemanager\CacheDriver;
use Sanjaygyawali\Cachemanager\ConnectionFactory;


require __DIR__ . '/vendor/autoload.php';
$options = (object)[
    "host" => "127.0.0.1",
    "port" => 6379
];


$cache = ConnectionFactory::connect(CacheDriver::REDIS, $options);
$cache->lpush('two', '1');
$cache->lpush('two', '2');
echo $cache->get("one");


$options = (object)[
    "host" => "",
    "port" => ""
];

$cache = ConnectionFactory::connect(CacheDriver::MEMCACHED, $options);
