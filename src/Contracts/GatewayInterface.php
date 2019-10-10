<?php

namespace Xing\ExpressInfo\Contracts;


interface GatewayInterface
{
    /**
     *
     * 获取网关名字
     * @return string
     */
    public function getName();

    public function getExpressInfo();
}