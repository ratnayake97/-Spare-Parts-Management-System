<?php

namespace App\Http\Controllers;

use App\Models\EmpHome;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmpHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmpHome  $empHome
     * @return \Illuminate\Http\Response
     */
    public function show(EmpHome $empHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmpHome  $empHome
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpHome $empHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpHome  $empHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpHome $empHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpHome  $empHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpHome $empHome)
    {
        //
    }

    public function employeeHome(){
        return view('employees.empHome');
    }

    
    
}
