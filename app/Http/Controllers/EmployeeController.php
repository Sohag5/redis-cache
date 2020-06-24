<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use Illuminate\Support\Facades\Redis;
use Cache;

use App\Events\EmployeeCreated;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee=Cache::rememberForever('employee',function(){
            return Employee::orderBy('employee_id','DESC')->take(20)->get();
        });

        return view('welcome',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $data =$request->all();
        $employee->fill($data)->save();

        return back()->with('success',"saved");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $employee=Cache::get('employee');
       // dd($employee);
       $employee=collect($employee)->where('employee_id',$id)->first();
       return view('view',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $employee=Cache::get('employee');
       // dd($employee);
       $employee=collect($employee)->where('employee_id',$id)->first();

       return view('create',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee =Employee::find($id);
        // dd($employee);
        $data =$request->all();
        $employee->fill($data)->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return back()->with('success',"saved");
    }
}
