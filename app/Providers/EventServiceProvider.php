<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array 
     */
    protected $listen = [
        // 'App\Events\Event' => [
        //     'App\Listeners\EventListener',
        // ],

         'App\Events\EmployeeCreated' =>[
            'App\Listeners\EventListener',
        ],

         'App\Events\EmployeeUpdated' =>[
            'App\Listeners\EventListener',
        ],

         'App\Events\EmployeeDeleted' =>[
            'App\Listeners\EventListener',
        ],
        'App\Events\EmployeeShow' =>[
            'App\Listeners\EventListener',
        ],


    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}