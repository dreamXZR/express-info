<?php

return [
    //http请求超时时间
    'timeout'=>5.0,

    //默认配置
    'default'=>[
        'gatway'=>'kuaidi100'
    ],

    'getways'=>[
        'errorlog' => [
            'file' => '/tmp/easy-sms.log'
        ],
        'kuaidi100'=>[

        ]
    ]
];