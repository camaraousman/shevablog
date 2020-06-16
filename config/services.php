<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '391719729964-l85uafo1iobc9udl8pm8dj6npkeqn1vh.apps.googleusercontent.com',
        'client_secret' => '7DHVK3aiJnu2XsTbn1entjhe',
        'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],

    'facebook' => [
        'client_id' => '260567095053005',
        'client_secret' => '55cb32722ed79413bb1a4bccf54bc875',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'github' => [
        'client_id' => 'cad31f3a7d2c4ad8cd13',
        'client_secret' => '4219b8c79fb6c47adda11e14a97434346da6da18',
        'redirect' => 'http://127.0.0.1:8000/login/github/callback',
    ],

];
