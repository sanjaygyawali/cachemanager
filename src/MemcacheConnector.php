<?php

namespace Sanjaygyawali\Cachemanager;

use Sanjaygyawali\Cachemanager\interface\CacheManagerInterface;

class MemcacheConnector implements CacheManagerInterface
{

    private $memcache;
    public function __construct()
    {
        $this->memcache = new \Memcache();
    }

    public function connect(string $host, string $port)
    {
        $this->memcache->connect($host, $port);
    }
    public function set(string $key, string $value, string $is_compressed = null, string $ttl = null)
    {
        $this->cache->set($key, $value, $is_compressed, $ttl);
    }
    public function get(string $key)
    {
        return $this->cache->get($key);
    }
    public function lpush(string $key, string $value)
    {
        throw new \Exception("method not supported");
    }
}
