<?php

use Sanjaygyawali\Cachemanager\CacheDriver;
use Sanjaygyawali\Cachemanager\ConnectionFactory;

require __DIR__ . '/vendor/autoload.php';
$options = (object)[
    "host" => "127.0.0.1",
    "port" => 6379
];

$cache = ConnectionFactory::connect(CacheDriver::REDIS, $options);
$cache->set('one', '1fasfasfd');
$cache->lpush('two', '2');
echo $cache->get("one");

$options = (object)[
    "host" => "127.0.0.1",
    "port" => "11211"
];
$cache = ConnectionFactory::connect(CacheDriver::MEMCACHED, $options);
$cache->set("test", "fasfsfs");
echo $cache->get("test");
// $cache->lpush('two', '2');
