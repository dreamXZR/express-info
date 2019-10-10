<?php

namespace Xing\ExpressInfo\Gateways;


use Xing\ExpressInfo\Contracts\GatewayInterface;
use Xing\ExpressInfo\Extend\Config;

abstract class Gateway implements GatewayInterface
{

    const DEFAULT_TIMEOUT = 5.0;

    protected $config;

    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }

    public function getName()
    {
        return \strtolower(str_replace([__NAMESPACE__.'\\', 'Gateway'], '', \get_class($this)));
    }
}