<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/wordpress/wp-content/themes/g5_hydrogen/blueprints/content/blog/meta-date.yaml',
    'modified' => 1472811520,
    'data' => [
        'name' => 'Publish Date Meta',
        'description' => 'Options for displaying date meta',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Date',
                    'description' => 'Display post publish date.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Date',
                    'description' => 'Link date to the post.',
                    'default' => 1
                ],
                'format' => [
                    'type' => 'select.date',
                    'label' => 'Date Format',
                    'description' => 'Select preferred date format.',
                    'default' => 'j F Y',
                    'placeholder' => 'Select...',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        'l, F d, Y' => 'Date1',
                        'l, d F Y H:i' => 'Date2',
                        'l, d F' => 'Date3',
                        'D, d F' => 'Date4',
                        'F d' => 'Date5',
                        'd F' => 'Date6',
                        'd M' => 'Date7',
                        'D, M d, Y' => 'Date8',
                        'D, M d, y' => 'Date9',
                        'l' => 'Date10',
                        'l j F Y' => 'Date11',
                        'j F Y' => 'Date12',
                        'F d, Y' => 'Date13'
                    ]
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Date Prefix',
                    'description' => 'Display text directly before the publish date.'
                ]
            ]
        ]
    ]
];