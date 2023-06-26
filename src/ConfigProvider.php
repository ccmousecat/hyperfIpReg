<?php

namespace Marko\HyperfIp;

class ConfigProvider
{
    public function __invoke():array{
        return [
            'publish' => [
                [
                    'id' => 'ipGeo',
                    'description' => 'The config for hyperf ip location',
                    'source' => __DIR__ . '/../publish/ip_geo.php',
                    'destination' => BASE_PATH . '/config/autoload/ip_geo.php'
                ]
            ],
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}