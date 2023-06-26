<?php

use Marko\HyperfIp\Location;

require_once "./vendor/autoload.php";

$config= [
    'enable' => true,

    'default'  => '--',      // 缺省展示值
    'language' => ['zh-CN'], // 语言

    'db-country' => null,    // 自定义的country库绝对地址
    'db-city'    => null,    // 自定义的city库绝对地址
    'db-asn'     => null,    // 自定义的asn库绝对地址
];

$res = (new Location($config))->getLocation('157.254.193.26');

var_dump($res);