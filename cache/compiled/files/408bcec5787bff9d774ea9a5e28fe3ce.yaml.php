<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/foundational/blueprints.yaml',
    'modified' => 1554612999,
    'data' => [
        'name' => 'Foundational',
        'version' => '0.1.0',
        'description' => 'A Zurb Foundation 6 theme for Grav CMS',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Douglas Gough',
            'email' => 'dougwgough@gmail.com'
        ],
        'homepage' => 'https://github.com/douglasgough/foundational',
        'demo' => 'https://foundational.douggough.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/douglasgough/foundational/issues',
        'readme' => 'https://github.com/douglasgough/foundational/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
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
