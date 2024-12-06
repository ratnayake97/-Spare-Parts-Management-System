<?php

namespace App\Http\Controllers;

use App\Models\IncomeModel;
use App\Models\ExpenseModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF; //pdf library


class FinancePDFController extends Controller
{

    public function getIncomePDF(){
        $data=IncomeModel::all();
       
        $totalIncome = DB::table('income_details')        
        ->select([DB::raw('Sum(income_details.income_amount) AS total_income')])
        ->value('total_income');

        $totalDiscount = DB::table('income_details')        
        ->select([DB::raw('Sum(income_details.income_discount) AS total_discount')])
        ->value('total_discount');

        return view ('finance.incomeSearch', compact('data',  'totalIncome', 'totalDiscount'));
    }


    public function generateIncomePDF($fromDate, $toDate){

        // dd($fromDate);
        // $datas = [
        //     'title' => 'Welcome to OnlineWebTutorBlog.com',
        //     'author' => "Sanjay"
        // ];

        // $data=IncomeModel::all();
        // $totalIncome = DB::table('income_details')        
        // ->select([DB::raw('Sum(income_details.income_amount) AS total_income')])
        // ->value('total_income');

        // $totalDiscount = DB::table('income_details')        
        // ->select([DB::raw('Sum(income_details.income_discount) AS total_discount')])
        // ->value('total_discount');

        
        //fetching data from table for the relevent date period
        $data=IncomeModel::where('transaction_date', '>=', $fromDate)-> where ('transaction_date', '<=', $toDate)-> get();
        // dd($data->toArray());  
        //calcualting total amount
        $totalIncome = DB::table('income_details')
        ->select([DB::raw('Sum(income_details.income_amount) AS total_cost')])
        ->whereBetween('transaction_date', array($fromDate, $toDate))
        ->value('total_cost');

        //calculating total discount given
        $totalDiscount = DB::table('income_details')
        ->select([DB::raw('Sum(income_details.income_discount) AS total_discount')])
        ->whereBetween('transaction_date', array($fromDate, $toDate))
        ->value('total_discount');


        $pdf = PDF::loadView('finance.incomeReport', compact('data',  'totalIncome', 'totalDiscount', 'fromDate', 'toDate'));
    
        return $pdf->download('IncomeReport.pdf');
    }



    public function getExpensePDF(){

        $data=ExpenseModel::all();
        $totalExpense = DB::table('expense_details')        
        ->select([DB::raw('Sum(expense_details.expense_amount) AS total_expense')])
        ->value('total_expense');


        $totalDiscount = DB::table('expense_details')        
        ->select([DB::raw('Sum(expense_details.expense_discount) AS total_discount')])
        ->value('total_discount');


        return view ('finance.expenseSearch', compact('data', 'totalExpense', 'totalDiscount'));
    }



    public function  generateExpensePDF($fromDate, $toDate){

        $data=ExpenseModel::where('transaction_date', '>=', $fromDate)-> where ('transaction_date', '<=', $toDate)-> get();
        // dd($data->toArray());  
        //calcualting total amount
         $totalExpense = DB::table('expense_details')
            ->select([DB::raw('Sum(expense_details.expense_amount) AS total_cost')])
            ->whereBetween('transaction_date', array($fromDate, $toDate))
            ->value('total_cost');

        //calculating total discount given
       $totalDiscount = DB::table('expense_details')
            ->select([DB::raw('Sum(expense_details.expense_discount) AS total_discount')])
            ->whereBetween('transaction_date', array($fromDate, $toDate))
            ->value('total_discount');


        date_default_timezone_set('Asia/Colombo');
        $currentdate = date('m/d/Y h:i:s a', time());
        
        $pdf = PDF::loadView('finance.expenseReport', compact('data', 'totalExpense', 'totalDiscount', 'fromDate', 'toDate'));
    
        return $pdf->download('ExpenseReport.pdf');
    }

}
