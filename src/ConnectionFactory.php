<?php

namespace Sanjaygyawali\Cachemanager;

use Exception;

class ConnectionFactory
{
    public static function connect(string $driverName, $options)
    {
        switch (strtolower($driverName)) {
            case CacheDriver::REDIS:
                $redis =  new RedisConnector($options);
                $redis->connect($options->host, $options->port);
                return $redis;
            case CacheDriver::MEMCACHED:
                $memcache = new MemcacheConnector();
                $memcache->connect($options->host, $options->port);
                return $memcache;
            default:
                throw new Exception('Invalid Driver');
        }
    }
}
