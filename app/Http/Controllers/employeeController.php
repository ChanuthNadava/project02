<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department =['HR','WEB DESIGN','ADMIN','DEPELOPING'];
        return view('employee.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employeename'=> 'required| min:2|max:32',
            'age'=>'required',
            'department'=>'required'
    ]);
        employee::create([
            'employeename' => $request->employeename,
            'age' => $request->age,
            'department' => $request->department
        ]);
        return response()->json([
            'success'=>'employee save successfully'
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
