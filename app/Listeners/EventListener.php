<?php

namespace App\Listeners;

use App\Events\EmployeeCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Employee;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
     // dd()
    }

    /**
     * Handle the event.
     *
     * @param  Event  $event
     * @return void
     */
    public function handle($event)
    {
        info('demo');
        cache()->forget('employee');
        $employee=Employee::orderBy('employee_id','DESC')->take(20)->get();
        cache()->forever('employee',$employee);
    }
}
