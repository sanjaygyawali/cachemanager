<?php

namespace Sanjaygyawali\Cachemanager;

use Sanjaygyawali\Cachemanager\Contract\CacheManagerInterface;

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
        $this->memcache->set($key, $value, $is_compressed, $ttl);
    }
    public function get(string $key)
    {
        return $this->memcache->get($key);
    }
}
