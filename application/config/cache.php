<?php

return array(
    // Cache Type: apc, memcache, xcache, redis
    'type'     => 'redis',
    'memcache' => array(
        'host' => 'localhost',
        'port' => 11211
    ),
    'redis'    => array(
        'host' => 'ServerTest',
        'port' => 6379
    )
);