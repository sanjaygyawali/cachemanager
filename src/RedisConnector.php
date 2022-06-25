<?php

namespace Sanjaygyawali\Cachemanager;

use Sanjaygyawali\Cachemanager\Contract\LPushInterface;

class RedisConnector implements LPushInterface
{
    private $redis;
    public function __construct()
    {
        $this->redis = new \Redis();
    }

    public function connect(string $host, string $port)
    {
        $this->redis->connect($host, $port);
    }

    public function set(string $key, string $value, string $is_compressed = null, string $ttl = null)
    {
        $this->redis->set($key, $value, $ttl);
    }
    public function get(string $key)
    {
        return $this->redis->get($key);
    }
    public function lpush(string $key, string $value)
    {
        return $this->redis->lpush($key, $value);
    }
}
