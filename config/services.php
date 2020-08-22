<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyBd-GAmrEVmVC0jBTfOcobFIIpm1IkYECI',
        'auth_domain' => 'chatapp-c269d.firebaseapp.com',
        'database_url' => 'https://chatapp-c269d.firebaseio.com',
        'secret' => 'dcTAd0Dv549pkwCsRLCDGN7R3o8xi1UwpCbZ2Yu5',
        'storage_bucket' => 'chatapp-c269d.appspot.com',
        'project_id' => 'chatapp-c269d',
        'messaging_sender_id' => '618580074438'
    ]
];
