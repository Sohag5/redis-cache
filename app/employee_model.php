<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_model extends Model
{
	protected $table='employee';
	protected $primaryKey='employee_id';
    protected $fillable = [
        'employee_name', 'employee_email',
    ];

   
}
