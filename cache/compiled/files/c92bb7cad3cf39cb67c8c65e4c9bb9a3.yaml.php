<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/topicmenu/blueprints.yaml',
    'modified' => 1554611946,
    'data' => [
        'name' => 'TopicMenu',
        'version' => '1.1.0',
        'description' => 'A plug-in that constructs an multi-dimensional array of user defined taxonomy',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Bob Rockefeller',
            'email' => 'bob@bobrockefeller.com',
            'url' => 'http://www.bobrockefeller.com'
        ],
        'homepage' => 'https://github.com/bobrocke/topicmenu',
        'demo' => NULL,
        'keywords' => 'topic, tag, plugin',
        'bugs' => 'https://github.com/bobrocke/topicmenu',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'page_path' => [
                    'type' => 'text',
                    'label' => 'Starting Path',
                    'help' => 'The starting path of the files to traverse',
                    'placeholder' => '/blog',
                    'validate' => [
                        'pattern' => '/([a-z\\-_]+/?)+'
                    ]
                ],
                'taxonomy_level_1' => [
                    'type' => 'text',
                    'label' => 'Taxonomy Level 1',
                    'help' => 'The first level of the taxonomy to use'
                ],
                'taxonomy_level_2' => [
                    'type' => 'text',
                    'label' => 'Taxonomy Level 2',
                    'help' => 'The second level of the taxonomy to use'
                ]
            ]
        ]
    ]
];
