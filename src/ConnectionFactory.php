<?php

namespace Sanjaygyawali\Cachemanager;

use Error;
use Exception;

class ConnectionFactory
{
    public static function connect(string $driverName, $options)
    {
        try {
            switch ($driverName) {
                case CacheDriver::REDIS:
                    $redis =  new RedisConnector();
                    $redis->connect($options->host, $options->port);
                    return $redis;
                case CacheDriver::MEMCACHED:
                    $memcache = new MemcacheConnector();
                    $memcache->connect($options->host, $options->port);
                    return $memcache;
                default:
                    throw new Exception('Invalid Driver');
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
            throw new Error("connection failed: $message");
        }
    }
}
