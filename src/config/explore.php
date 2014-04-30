<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | apiDoc json data
    |--------------------------------------------------------------------------
    |
    | Path to your json data that generated by apiDoc
    | Reference URL: http://apidocjs.com/
    |
    */

    'json'     => public_path().'/developers/api_data.json',

    /*
    |--------------------------------------------------------------------------
    | Routing path
    |--------------------------------------------------------------------------
    |
    | Your application path to show explorer.
    |
    */

    'path'     => 'developers/explorer',

    /*
    |--------------------------------------------------------------------------
    | RESTful API endpoint
    |--------------------------------------------------------------------------
    |
    | Base endpoint URL to look up RESTful.
    |
    */

    'endpoint' => 'https://api.domain.com/base',

    /*
    |--------------------------------------------------------------------------
    | Prepend parameters
    |--------------------------------------------------------------------------
    |
    | Sometimes you need to prepend the same data to all methods,
    | so you can use this config to prepend.
    |
    */

    'prepends' => array(
        array(
            'group'       => 'Parameter',
            'type'        => 'Number',
            'field'       => 'app_id',
            'value'       => 1,
            'optional'    => false,
            'description' => 'Application ID'
        ),
        array(
            'group'       => 'Parameter',
            'type'        => 'String',
            'field'       => 'secret',
            'value'       => '0dL1zg7XY3IDxHLs45EfV42645usN9CFb',
            'optional'    => false,
            'description' => 'Application Secret'
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Append parameters
    |--------------------------------------------------------------------------
    |
    | This config seems like 'prepends', but append after above parameters.
    |
    */

    'appends'  => array(),

    /*
    |--------------------------------------------------------------------------
    | Template
    |--------------------------------------------------------------------------
    |
    | Custom template location.
    |
    */

    'template' => 'explore::template',

    'sidebar'  => 'explore::sidebar',

    'footer'   => 'explore::footer'

);