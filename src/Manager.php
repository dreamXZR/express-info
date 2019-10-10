<?php

namespace Xing\ExpressInfo;


class Manager
{
    protected $expressInfo;

    public function __construct(ExpressInfo $expressInfo)
    {
        $this->expressInfo=$expressInfo;
    }

    public function getExpressInfo($express_number,$message,$gateway)
    {
        $results=[];
        $isSuccessful=false;

        return $results;

    }
}