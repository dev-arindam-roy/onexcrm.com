<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Assets Path For Shared Hosting
    |--------------------------------------------------------------------------
    |
    | if you hots this project in the shared hosting
    | then you need to add public folder in the asset() function call
    | So, here is the config variable where you can enable the public folder path
    | Ex: 'asset_path' => 'public/'
    | 
    | Note: For shared hosting you should copy below files from public folder
    | and paste in the root folder.
    | files are: index.php, .htaccess, robots.txt 
    |
    | Default 'asset_path' is blank
    */

    'asset_path' => '',

    'app_title' => str_replace('_', ' ', env('APP_NAME'))
];