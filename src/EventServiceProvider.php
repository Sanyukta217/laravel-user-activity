<?php

namespace sanyukta\LaravelUserActivity;

use sanyukta\LaravelUserActivity\Listeners\LockoutListener;
use sanyukta\LaravelUserActivity\Listeners\LoginListener;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class   => [
            LoginListener::class
        ],
        Lockout::class => [
            LockoutListener::class
        ]
    ];

    public function boot()
    {
        parent::boot();
    }
}