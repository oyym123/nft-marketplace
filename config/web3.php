<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection
    |--------------------------------------------------------------------------
    |
    | The default connection that Web3 client will connect to.
    |
    */

    'default' => env('WEB3_CONNECTION', 'http'),

    'connections' => [

        /*
        |--------------------------------------------------------------------------
        | HTTP Driver
        |--------------------------------------------------------------------------
        |
        | This is the default connection, where it takes place directly
        | with the default request manager and HTTP provider.
        | You can pass the provider and request manager class names
        | that will be used to initialize the client with.
        |
        */

        'http' => [
            'driver' => 'http',
//            'host' => env('WEB3_HTTP_HOST', 'http://localhost:7545'),
            'host' => env('WEB3_HTTP_HOST', 'https://ropsten.infura.io/v3/9aa3d95b3bc440fa88ea12eaa4456161'),
        ],
        'http2' => [
            'driver' => 'http',
            'host' => env('WEB3_HTTP_HOST', 'http://localhost:7545'),
        ],

    ],
];
