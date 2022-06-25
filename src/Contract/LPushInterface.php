<?php

namespace Sanjaygyawali\Cachemanager\Contract;

use Sanjaygyawali\Cachemanager\Contract\CacheManagerInterface;

interface LPushInterface extends CacheManagerInterface
{
    public function lpush(string $key, string $value);
}
