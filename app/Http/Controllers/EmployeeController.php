<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use phpDocumentor\Reflection\Types\Boolean;



class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

  
    public function index(Request $request) {

        $search = $request['search'] ?? "";
        if($search != ""){
            $employee = Employee::where('empid','LIKE', "%$search%")->orWhere('name','LIKE', "%$search%")->get();

        }else{
            $employee = Employee::latest()->get();
        }

        $data = compact('employee','search');
        return view('employees.index')->with($data);
    }

    public function show(Employee $employee) {
        return view('employees.show', ['employees' =>  $employee]);
    }
    
    public function create() {
        return view('employees.create');
    }

    public function edit(Employee $employee) {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee) {
        $request->validate([
            //'empid'=>'required',
            'name' => 'required',
            'contact_no'=>'required|max:10',
            'email'=>'required',
            'designation'=>'required',
            'address'=>'required',
        ]);
        $file = $request->file('image');

       if($file->isValid())
       {
           $destinationPath = 'empimages/';
           $image = date('YmdHis').'.'.$file->getClientOriginalExtension();
           //$image = $id.'_'.$request->get('name').'.'.$file->getClientOriginalExtension();
           $file->move($destinationPath,$image);
       }
      
        //$employee->empid = $request->empid;
        $employee->name = $request->name;
        $employee->contact_no = $request->contact_no;
        $employee->email= $request->email;
        $employee->designation= $request->designation;
        $employee->address= $request->address;
        $employee->image= $image;
        
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function store(Request $request) {
        $employee = new Employee();
       $request->validate([
            'empid'=>'required|min:6',
            'name' => 'required',
            'contact_no'=>'required|max:10',
            'email'=>'required',
            'designation'=>'required',
            'address'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png|max:3048',
        ]);
       
        
       $file = $request->file('image');

       if($file->isValid())
       {
           $destinationPath = 'empimages/';
           $image = date('YmdHis').'.'.$file->getClientOriginalExtension();
           //$image = $id.'_'.$request->get('name').'.'.$file->getClientOriginalExtension();
           $file->move($destinationPath,$image);
       }

       $employee->empid=$request->get('empid');
       $employee->name=$request->get('name');
       $employee->contact_no=$request->get('contact_no');
       $employee->email=$request->get('email');
       $employee->designation=$request->get('designation');
       $employee->address=$request->get('address');
       $employee->image=$image;

       $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee has been added successfully!');
    }

    public function destroy(Employee $employee) {
        
        $employee->delete();
        return back();
    }

    public function getDetails(){
        $reports = Employee::all();
        $sum = Employee::count('id');
        return view('employees.report', compact('reports','sum'));
    }

    public function downloadPDF(){
        $reports = Employee::all();
        $sum = Employee::count('id');
        $pdf = PDF::loadView('employees.report',compact('reports','sum'));
        return $pdf->download('employees.pdf');
    }
   
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Employee::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }
}
