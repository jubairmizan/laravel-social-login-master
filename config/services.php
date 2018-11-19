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

 'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_CALLBACK_URL'),
    ],

    'google' => [
        'client_id' => '845559153403-r54alekb0dg9eui8gvcu66lugstu8214.apps.googleusercontent.com',
        'client_secret' => 'TwuXryTFV2iE1USBomo9-q_s',
        'redirect' => 'http://localhost:8000',
    ],

    'github' => [
    'client_id' => 'your-github-app-id',
    'client_secret' => 'your-github-app-secret',
    'redirect' => 'http://your-callback-url',
],

'twitter' => [
    'client_id' => 'KhhT0mb0253NffAfmUC7S4Y9e',
    'client_secret' => 'tgIpyhCsMigiKZj2RdsPYFkRS6uIJuT3VHE38yJjKD3PfX5QKa',
    'redirect' => 'http://localhost:8000/callback/twitter',
],

];
