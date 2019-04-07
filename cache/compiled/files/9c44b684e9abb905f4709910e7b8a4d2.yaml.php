<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/presentation-deckset/blueprints.yaml',
    'modified' => 1554613378,
    'data' => [
        'name' => 'Presentation Deckset',
        'version' => '1.1.4',
        'description' => 'Use Deckset Syntax with the Presentation-plugin',
        'icon' => 'plug',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.net'
        ],
        'homepage' => 'https://github.com/OleVik/grav-plugin-presentation-deckset',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/OleVik/grav-plugin-presentation-deckset/issues',
        'docs' => 'https://github.com/OleVik/grav-plugin-presentation-deckset/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.9'
            ],
            2 => [
                'name' => 'presentation',
                'version' => '>=1.1'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
