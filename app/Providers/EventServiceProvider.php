<?php

namespace App\Providers;

use App\Listeners\PaddleEventListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Laravel\Paddle\Events\WebhookReceived;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        WebhookReceived::class => [
            PaddleEventListener::class,
        ],
    ];
}
