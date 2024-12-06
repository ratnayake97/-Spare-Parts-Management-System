<?php

namespace App\Http\Controllers;

use App\Models\ExpenseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ExpenseModel::all();
        return view('finance.retrieveexpense', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $expense = new ExpenseModel;

        $validatedata = $request->validate([
        'exref' => 'required',
        'extransdate' => 'required',
        'expenseamount' => 'required',
        'expensecategory' => 'required',
        'exdescription' => 'required',
        ]);
        
        //dd("controller");
        $expense -> expense_refno = $request -> exref;
        $expense -> transaction_date = $request -> extransdate;
        $expense -> expense_amount = $request -> expenseamount;
        $expense -> expense_category = $request -> expensecategory;
        $expense -> expense_discount= $request -> exdiscount;
        $expense -> expense_description = $request -> exdescription;
        $expense -> save();

        return view('finance.financeSuccess');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function UpdateExpenseView($payment_number){
        
        $expense = ExpenseModel::find($payment_number);
        return view('finance.expenseupdate') ->with ('expensedata', $expense);
    }
  

    public function UpdateExpense(Request $request)
    {
        //dd($request);
        $validatedata = $request->validate([
            'exref' => 'required',
            'extransdate' => 'required',
            'expenseamount' => 'required',
            'expensecategory' => 'required',
            'exdescription' => 'required',
            ]);
            

        $updatedata = ExpenseModel::find($request -> paymentnum);
        $updatedata -> expense_refno = $request -> exref;
        $updatedata -> transaction_date = $request -> extransdate;
        $updatedata -> expense_amount = $request -> expenseamount;
        $updatedata -> expense_category = $request -> expensecategory;
        $updatedata -> expense_discount= $request -> exdiscount;
        $updatedata -> expense_description =  $request -> exdescription;

        $updatedata -> save();

        $expensedatas= ExpenseModel::all();
        return view('finance.retrieveexpense') -> with('data', $expensedatas);

    }
    

    public function DeleteExpense($payment_number)
    {
      $expense= ExpenseModel::find($payment_number);
      $expense->delete();
    //   dd('DELETED');
      return redirect()->back();
    }

    public function InsertExpenseView()
    {
        return view('finance.expenseinsert');
    }

    public function ExpenseSearchView(){


        $data=ExpenseModel::all();
        $totalExpense = DB::table('expense_details')        
        ->select([DB::raw('Sum(expense_details.expense_amount) AS total_expense')])
        ->value('total_expense');


        $totalDiscount = DB::table('expense_details')        
        ->select([DB::raw('Sum(expense_details.expense_discount) AS total_discount')])
        ->value('total_discount');


        $fromDate = 'Select Date';
        $toDate = 'Select Date';

        return view ('finance.expenseSearch', compact('data', 'totalExpense', 'totalDiscount', 'fromDate', 'toDate'));
    }

    public function ExpenseSearch(Request $request){


        if(!empty($request->exfrom))
        {
            $data=ExpenseModel::where('transaction_date', '>=', $request-> exfrom)-> where ('transaction_date', '<=', $request-> exto)-> get();
        
            //calcualting total amount
            $totalExpense = DB::table('expense_details')
            ->select([DB::raw('Sum(expense_details.expense_amount) AS total_cost')])
            ->whereBetween('transaction_date', array($request->exfrom, $request->exto))
            ->value('total_cost');
        
            //calculating total discount given
            $totalDiscount = DB::table('expense_details')
            ->select([DB::raw('Sum(expense_details.expense_discount) AS total_discount')])
            ->whereBetween('transaction_date', array($request->exfrom, $request->exto))
            ->value('total_discount');


            $fromDate = $request->exfrom;
            $toDate = $request->exto;    

            return view ('finance.expenseSearch', compact('data', 'totalExpense', 'totalDiscount', 'fromDate', 'toDate'));
            

        } else{
            $data=ExpenseModel::all();
            $totalExpense = DB::table('expense_details')        
            ->select([DB::raw('Sum(expense_details.expense_amount) AS total_expense')])
            ->value('total_expense');

            $totalDiscount = DB::table('expense_details')        
            ->select([DB::raw('Sum(expense_details.expense_discount) AS total_discount')])
            ->value('total_discount');


            $fromDate = 'Select Date';
            $toDate = 'Select Date';
    
            return view ('finance.expenseSearch', compact('data',  'totalExpense', 'totalDiscount', 'fromDate', 'toDate'));
            }
        
    }
    

}
