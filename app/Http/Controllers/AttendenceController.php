<?php

namespace App\Http\Controllers;


use App\Models\Attendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Boolean;
use PDF;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request['search'] ?? "";
        if($search != ""){
            $attendence = Attendence::where('empid','LIKE', "%$search%")->orWhere('name','LIKE', "%$search%")->get();

        }else{
            $attendence = Attendence::latest()->get();
           
        }

        $data = compact('attendence','search');
        return view('attendence.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendence.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'empid'=>'required|min:6',
            'name'=>'required',
            'daytype'=>'required',
            'days'=>'required',
            'hours'=>'required',
        ]);
        
       
        Attendence::create($data);
        return redirect()->route('attendence.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(Attendence $attendence)
    {
        return view('attendence.show',compact('attendence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendence $attendence)
    {
        return view('attendence.edit',compact('attendence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendence $attendence)
    {
    
        $request->validate([
            //'empid'=>'required',
            'name'=>'required',
            'daytype'=>'required',
            'days'=>'required',
            'hours'=>'required',
            
            
        ]);
        //$attendence->empid = $request->empid;
        $attendence->name = $request->name;
        $attendence->daytype = $request->daytype;
        $attendence->days = $request->days;
        $attendence->hours = $request->hours;
        
       
        $attendence->save();
        
        return redirect()->route('attendence.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendence $attendence)
    {
        
        $attendence->delete();
        return back();
    }
   
    public function getDetails(){
        $reports = Attendence::all();
        $sum = Attendence::sum('salary');
        $count = Attendence::count('id');
        return view('attendence.report', compact('reports','count','sum'));
    }

    public function downloadPDF(){
        $reports = Attendence::all();
        $count = Attendence::count('id');
        $sum = Attendence::sum('salary');
        $pdf = PDF::loadView('attendence.report',compact('reports','count','sum'));
        return $pdf->download('attendence.pdf');
    }

   
    
}
