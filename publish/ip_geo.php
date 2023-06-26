<?php

//更改自composer require workbunny/webman-ip-attribution
return [
    'enable' => true,

    'default'  => '--',      // 缺省展示值
    'language' => ['zh-CN'], // 语言

    'db-country' => null,    // 自定义的country库绝对地址
    'db-city'    => null,    // 自定义的city库绝对地址
    'db-asn'     => null,    // 自定义的asn库绝对地址
];