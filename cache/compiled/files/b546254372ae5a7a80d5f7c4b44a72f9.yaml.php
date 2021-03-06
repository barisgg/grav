<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/themes/quark-open-publishing.yaml',
    'modified' => 1554613464,
    'data' => [
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/quark-open-publishing',
                            1 => 'user/themes/quark'
                        ]
                    ]
                ]
            ]
        ],
        'chromeless' => [
            'enabled' => false
        ],
        'display_of_git_sync_repo_link' => 'menu',
        'type_of_git_sync_repo_link' => 'view',
        'h5pembedrootpath' => 'https://h5p.org/h5p/embed/',
        'cc_license' => [
            'enabled' => false,
            'type' => 'ccby',
            'icon' => false
        ],
        'dropdown' => [
            'enabled' => false
        ],
        'displaycustommenus' => [
            'enabled' => false
        ],
        'hidehomemenulink' => false,
        'production-mode' => true,
        'grid-size' => 'grid-lg',
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => true,
        'header-transparent' => true,
        'sticky-footer' => true,
        'blog-page' => '/blog',
        'spectre' => [
            'exp' => true,
            'icons' => true
        ]
    ]
];
