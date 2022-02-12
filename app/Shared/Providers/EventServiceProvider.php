<?php

namespace App\Shared\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Shared\Event\ExampleEvent::class => [
            \App\Shared\Event\ExampleListener::class,
        ],
    ];
}
