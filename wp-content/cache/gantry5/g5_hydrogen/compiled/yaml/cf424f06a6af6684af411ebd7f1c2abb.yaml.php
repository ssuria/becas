<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/wordpress/wp-content/themes/g5_hydrogen/blueprints/content/blog/content.yaml',
    'modified' => 1472811520,
    'data' => [
        'name' => 'Content',
        'description' => 'Options for displaying Content in the view',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'type' => [
                    'type' => 'select.select',
                    'label' => 'Content Type',
                    'description' => 'What post should display by default',
                    'default' => 'content',
                    'options' => [
                        'content' => 'Content',
                        'excerpt' => 'Excerpt'
                    ]
                ]
            ]
        ]
    ]
];
