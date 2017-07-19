<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/wordpress/wp-content/themes/g5_hydrogen/custom/config/default/layout.yaml',
    'modified' => 1499898304,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1472811520
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-5905 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-5483'
                ]
            ],
            '/main/' => [
                0 => [
                    0 => 'position-breadcrumbs'
                ],
                1 => [
                    0 => 'system-messages-5006'
                ],
                2 => [
                    0 => 'system-content-1887'
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-8093 40',
                    1 => 'spacer-8027 30',
                    2 => 'branding-8487 30'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-8423'
                ]
            ]
        ],
        'structure' => [
            'header' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'position-header' => [
                'attributes' => [
                    'key' => 'header'
                ]
            ],
            'position-breadcrumbs' => [
                'attributes' => [
                    'key' => 'breadcrumbs'
                ]
            ],
            'position-footer' => [
                'attributes' => [
                    'key' => 'footer'
                ]
            ]
        ]
    ]
];
