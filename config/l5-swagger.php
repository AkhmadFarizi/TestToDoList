<?php

return [
    'api' => [
        'title' => 'My API',
    ],
    'routes' => [
        'api' => [
            'path' => 'api/documentation',
        ],
    ],
    'paths' => [
        'docs' => storage_path('api-docs'),
        'swagger_ui' => env('SWAGGER_UI', 'api/documentation'),
        'routes' => [
            'api' => 'api/documentation',
        ],
    ],
    'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', false),
    'generate_docs' => env('L5_SWAGGER_GENERATE_DOCS', true),
    'generate_assets' => env('L5_SWAGGER_GENERATE_ASSETS', true),
];

