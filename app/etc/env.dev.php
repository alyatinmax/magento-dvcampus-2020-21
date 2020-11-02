<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '1ebe7a23727cdd4b0e11dd5f1bf24c19'
    ],
    'db' => [
        'table_prefix' => 'm2_',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'dev_maksym_aliatin235_local',
                'username' => 'dev_maksym_aliatin235_local',
                'password' => 'ESGSERRvewsg[0349ujiwpernkl',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '40d_'
            ],
            'page_cache' => [
                'id_prefix' => '40d_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'dev-maksym-aliatin235.local'
    ],
    'install' => [
        'date' => 'Thu, 08 Oct 2020 15:05:28 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://dev-maksym-aliatin235.local/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => 'https://dev-maksym-aliatin235.local/static/',
                    'base_media_url' => 'https://dev-maksym-aliatin235.local/media/'
                ],
                'secure' => [
                    'base_url' => 'https://dev-maksym-aliatin235.local/',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => 'https://dev-maksym-aliatin235.local/static/',
                    'base_media_url' => 'https://dev-maksym-aliatin235.local/media/'
                ]
            ]
        ],
        'websites' => [
            'new_website' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://dev-new-maksym-aliatin235.local/',
                        'base_link_url' => 'https://dev-new-maksym-aliatin235.local/',
                        'base_static_url' => 'https://dev-new-maksym-aliatin235.local/static/',
                        'base_media_url' => 'https://dev-new-maksym-aliatin235.local/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://dev-new-maksym-aliatin235.local/',
                        'base_link_url' => 'https://dev-new-maksym-aliatin235.local/',
                        'base_static_url' => 'https://dev-new-maksym-aliatin235.local/static/',
                        'base_media_url' => 'https://dev-new-maksym-aliatin235.local/media/'
                    ]
                ]
            ]
        ]
    ]
];
