<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class employee_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //    DB::table('employee')->insert([
     //        'employee_name' => Str::random(10),
     //        'employee_email' => Str::random(10).'@gmail.com',
     //    ]);



	    factory(App\employee_model::class, 100000)->create();


    }
}
