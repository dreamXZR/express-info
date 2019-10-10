<?php

namespace Xing\ExpressInfo;


use Xing\ExpressInfo\Exceptions\NoGatewayAvailableException;
use Xing\ExpressInfo\Extend\Config;

class ExpressInfo
{
    /**
     * @var Config 获取配置文件
     */
    protected  $config;

    /**
     * @var string 默认网关
     */
    protected $defaultGateway;

    /**
     * @var Manager 管理类
     */
    protected $manager;

    public function __construct(array $config)
    {
        $this->config=new Config($config);

        if(!empty($config['default'])){
            $this->setDefaultGateway($config['default']);  //设置默认网关
        }
    }


    public function getExpressInfo($express_number, $message, $gateway = '')
    {
        $express_number=$this->format_express_number($express_number);

        if(empty($gateway)){
            if(empty($this->defaultGateway)){
                throw new NoGatewayAvailableException("请填写默认网关");
            }else{
                $gateway=$this->defaultGateway;
            }
        }

        return $this->getManager()->getExpressInfo($express_number,$message,$gateway);
    }

    /**
     * 设置默认网关
     * @param string $defaultGateway 网关名称
     * @return $this
     */
    public function setDefaultGateway($defaultGateway)
    {
        $this->defaultGateway=$defaultGateway;

        return $this;
    }



    public function getManager()
    {
        return $this->manager ?: $this->manager=new Manager($this);
    }

    /**
     * 格式化快递单号
     * @param $express_number
     * @return string
     */
    protected function format_express_number($express_number)
    {
        return \trim($express_number);
    }


}