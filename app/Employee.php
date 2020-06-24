<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $table='employee';
	protected $primaryKey='employee_id';
	protected $fillable=[
		'employee_name',
		'employee_email',
		'employee_code'
	];


 
	protected $events = [
        'created' =>  \App\Events\EmployeeCreated::class,
        'updated' => \App\Events\EmployeeUpdated::class,
        'deleted' => \App\Events\EmployeeDeleted::class,
        'show' => \App\Events\EmployeeShow::class,
    ];


}
