<?php

namespace Vw\Api\Config;

class AllowCors
{
    private const  ALLOW_CORS_ORIGIN_KEY = 'Access-Control-Allow-Origin';
    private const  ALLOW_CORS_ORIGIN_VALUE = '*';

    private const  ALLOW_CORS_METHOD_KEY = 'Access-Control-Allow-Methods';
    private const  ALLOW_CORS_METHOD_VALUE = 'GET,POST,PUT,DELETE, PATCH, OPTIONS';

    public function init(): void
    {
        $this->set(self::ALLOW_CORS_METHOD_KEY, self::ALLOW_CORS_METHOD_VALUE);
        $this->set(self::ALLOW_CORS_ORIGIN_KEY, self::ALLOW_CORS_ORIGIN_VALUE);
        //self ist die klasse selber
    }
    public function set(string $key, string $value)
    {
        header($key . ':' . $value);
    }
}
