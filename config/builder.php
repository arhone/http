<?php

return [
    'Http' => [
        'class' => 'arhone\http\Http',
        'construct' => [
            ['Request'],
            ['Response']
        ]
    ],
    'Request' => [
        'class' => 'arhone\http\Request',
        'construct' => [
            [
                'array' => $_SERVER,
            ],
            [
                'array' => getallheaders()
            ],
            [
                'array' => $_GET,
            ],
            [
                'array' => $_POST,
            ],
            [
                'array' => $_COOKIE,
            ],
            [
                'array' => $_FILES
            ]
        ]
    ],
    'Response' => [
        'class' => 'arhone\http\Response',
        'construct' => []
    ]
];