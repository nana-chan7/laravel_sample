<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [
    'name' => env('APP_NAME', 'Laravel'),

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    'timezone' => 'UTC',

    // 言語: 英語化 | 日本語化
    'locale' => 'en',
    // 'locale' => 'ja',
    'fallback_locale' => 'en',
    // 'fallback_locale' => 'ja',

    'faker_locale' => 'en_US',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',


    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    'providers' => ServiceProvider::defaultProviders()->merge([

        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
