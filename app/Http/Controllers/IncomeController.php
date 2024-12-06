<?php

namespace App\Http\Controllers;

use App\Models\IncomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    
    public function index()
    {

        $data=IncomeModel::all();
        return view('finance.retrieveincome', compact('data'));

    }

  
    public function create(Request $request)
    {
       $income = new IncomeModel;

       $validatedata = $request->validate([
        'inref' => 'required',
        'intransdate' => 'required',
        'incomeamount' => 'required',
        'incomecategory' => 'required',
        'indescription' => 'required',
        ]);

        $income -> income_refno = $request -> inref;
        $income -> transaction_date = $request -> intransdate;
        $income -> income_amount = $request -> incomeamount;
        $income -> income_category = $request -> incomecategory;
        $income -> income_discount = $request -> indiscount;
        $income -> income_description = $request -> indescription;
        $income -> save();
        
        
        //return pages must include
        return view('finance.financeSuccess');
        
        //dd("saved");


        // $data=IncomeModel::all();
        // return redirect()->back();
        // return view('retrieveincome', compact('data'));

    }

    public function UpdateIncomeView($invoice_number){
        
        $income = IncomeModel::find($invoice_number);
        return view('finance.incomeupdate') ->with ('incomedata', $income);
    }

   
    public function UpdateIncome(Request $request)
    {
        //dd($request);

        $updatedata = IncomeModel::find($request -> invoicenum);
        $updatedata -> income_refno = $request -> inref;
        $updatedata -> transaction_date = $request -> intransdate;
        $updatedata -> income_amount = $request -> incomeamount;
        $updatedata -> income_category = $request -> incomecategory;
        $updatedata -> income_discount = $request -> indiscount;
        $updatedata -> income_description =  $request -> indescription;

        $updatedata -> save();

        $incomedatas= IncomeModel::all();
        return view('finance.retrieveincome') -> with('data', $incomedatas);

    }

    public function DeleteIncome($invoice_number)
    {
      $income= IncomeModel::find($invoice_number);
      $income->delete();
    //   dd('DELETED');
      return redirect()->back();
    }

    
    public function InsertIncomeView()
    {
        return view('finance.incomeinsert');
    }

    public function  RetrieveIncomeView()
    {
        return view('finance.incomeinsert');
    }

    public function IncomeSearchView(){


        $data=IncomeModel::all();
       
        $totalIncome = DB::table('income_details')        
        ->select([DB::raw('Sum(income_details.income_amount) AS total_income')])
        ->value('total_income');

        $totalDiscount = DB::table('income_details')        
        ->select([DB::raw('Sum(income_details.income_discount) AS total_discount')])
        ->value('total_discount');

        $fromDate = 'Select Date';
        $toDate = 'Select Date';

        return view ('finance.incomeSearch', compact('data',  'totalIncome', 'totalDiscount', 'fromDate', 'toDate'));
        
    }

    public function IncomeSearch(Request $request){


        if(!empty($request->infrom))
        {
            //fetching data from table for the relevent date period
            $data=IncomeModel::where('transaction_date', '>=', $request->infrom)->where('transaction_date', '<=', $request->into)->get();
            
            //calcualting total amount
            $totalIncome = DB::table('income_details')
            ->select([DB::raw('Sum(income_details.income_amount) AS total_cost')])
            ->whereBetween('transaction_date', array($request->infrom, $request->into))
            ->value('total_cost');

            //calculating total discount given
            $totalDiscount = DB::table('income_details')
            ->select([DB::raw('Sum(income_details.income_discount) AS total_discount')])
            ->whereBetween('transaction_date', array($request->infrom, $request->into))
            ->value('total_discount');


            $fromDate = $request->infrom;
            $toDate = $request->into;        
            return view ('finance.incomeSearch', compact('data', 'totalIncome', 'totalDiscount', 'fromDate', 'toDate'));
        
        } else{
            $data=IncomeModel::all();
        $totalIncome = DB::table('income_details')        
        ->select([DB::raw('Sum(income_details.income_amount) AS total_income')])
        ->value('total_income');

        $totalDiscount = DB::table('income_details')        
            ->select([DB::raw('Sum(income_details.income_discount) AS total_discount')])
            ->value('total_discount');

        $fromDate = 'Select Date';
        $toDate = 'Select Date';

        return view ('finance.incomeSearch', compact('data',  'totalIncome', 'totalDiscount', 'fromDate', 'toDate'));
        }
   }
   

    
}
