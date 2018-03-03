<?php

return [
    'Http' => [
        'class' => 'arhone\http\Http',
        'construct' => [
            ['Request'],
            ['Response'],
            ['Header']
        ]
    ],
    'Request' => [
        'class' => 'arhone\http\Request',
        'construct' => [
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        ]
    ],
    'Response' => [
        'class' => 'arhone\http\Response',
        'construct' => []
    ],
    'Header' => [
        'class' => 'arhone\http\Header',
        'construct' => [
            getallheaders()
        ]
    ]
];