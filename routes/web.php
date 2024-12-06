<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\EmpHomeController;


use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FinancePDFController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainMenu');
});

/*-----------------------------------EMPLOYEE MANAGEMENT--------------------------------------- */

Route::resource('employees',EmployeeController::class);
Route::resource('attendence', AttendenceController::class);

Route::get('/getDetailss',[EmployeeController::class,'getDetails']);
Route::get('/download-pdf', [EmployeeController::class,'downloadPDF']);

Route::get('/getDetails',[AttendenceController::class,'getDetails']);
Route::get('/download-pdff', [AttendenceController::class,'downloadPDF']);

Route::get('/empHome', [EmpHomeController::class,'employeeHome']);

Route::get('/emphome', function () {
    return view('employees.empHome');
});

Route::get('/mainmenu', function () {
    return view('mainMenu');
});




/*-----------------------------------FINANCE MANAGEMENT--------------------------------------- */

Route::get('/financesub', function () {
    return view('finance.submenufinance');
});

Route::post('/addIncome', [IncomeController::class, 'create']);

Route::get('/updateincome/{invoice_number}', [IncomeController::class, 'UpdateIncomeView']);

Route::post('/updateIncome', [IncomeController::class, 'UpdateIncome']);

Route::get('/deleteincome/{invoice_number}', [IncomeController::class, 'DeleteIncome']);

Route::get('/expenseinsert', function () {
    return view('finance.expenseinsert');
});

Route::post('/addExpense', [ExpenseController::class, 'create']);


Route::get('/updateexpense/{payment_number}', [ExpenseController::class, 'UpdateExpenseView']);

Route::post('/updateExpense', [ExpenseController::class, 'UpdateExpense']);

Route::get('/deleteexpense/{payment_number}', [ExpenseController::class, 'DeleteExpense'] );

Route::get('/viewinsertincome', [IncomeController::class, 'InsertIncomeView']);
Route::get('/viewinsertexpense', [ExpenseController::class, 'InsertExpenseView']);

Route::get('/retrieveincomes', [IncomeController::class, 'index']) -> name('retrieveincome');
Route::get('/retrieveexpenses',[ExpenseController::class, 'index']) -> name('retrieveexpense');

Route::get('/mainmenu', function () {
    return view('mainMenu');
});

Route::get('/financeSuccess', function () {
    return view('finance.financeSuccess');
});

Route::get('/returnincomeinsert', function () {
    return view('finance.incomeinsert');
});

Route::get('/returnexpenseinsert', function () {
    return view('finance.expenseinsert');
});


//searching
Route::get('/searchIncome', [IncomeController::class, 'IncomeSearchView']);
Route::post('/searchIncome', [IncomeController::class, 'IncomeSearch']);

Route::get('/searchExpense', [ExpenseController::class, 'ExpenseSearchView']);
Route::post('/searchExpense', [ExpenseController::class, 'ExpenseSearch']);

//reporting
Route::get('/incomePDF/{fromDate?}/{toDate?}', [FinancePDFController::class, 'generateIncomePDF']);
Route::get('/expensePDF/{fromDate?}/{toDate?}', [FinancePDFController::class, 'generateExpensePDF']);


/*-----------------------------------STOCK MANAGEMENT--------------------------------------- */

// stock home
Route::get('/home', function () {
    return view('welcome');
});

// show form - insert product
Route::get('/stock/create', 'App\Http\Controllers\StockController@create');

// save stock details
Route::post('/stock/store', 'App\Http\Controllers\StockController@store');

// display product details
Route::get('/stock/product', 'App\Http\Controllers\StockController@showProduct');
Route::get('/product', 'App\Http\Controllers\StockController@showProduct');

// display product details for update
Route::get('/stock/product/edit/{id}', 'App\Http\Controllers\StockController@indexProduct');

// update product details
Route::post('/stock/product/edit/', 'App\Http\Controllers\StockController@editProduct');

// delete product details
Route::get('/stock/product/delete/{id}', 'App\Http\Controllers\StockController@deleteProduct');

// display order details
Route::get('/stock/order', 'App\Http\Controllers\StockController@showOrder');
Route::get('/order', 'App\Http\Controllers\StockController@showOrder');

// display order details for update
Route::get('/stock/order/edit/{id}', 'App\Http\Controllers\StockController@indexOrder');


// update order details
Route::post('/stock/order/edit/', 'App\Http\Controllers\StockController@editOrder');

// delete order details
Route::get('/stock/order/delete/{id}', 'App\Http\Controllers\StockController@deleteOrder');

// search products
Route::get('/stock/product/search', [StockController::class, 'productSearch']);

// search orders
Route::get('/stock/order/search', [StockController::class, 'orderSearch']);

// pdf - order
Route::get('/stock/order/pdf', [StockController::class, 'orderPdfReport']);

// pdf - product
Route::get('/stock/product/pdf', [StockController::class, 'productPdfReport']);


/*-----------------------------------ORDER MANAGEMENT--------------------------------------- */

// customer home
Route::get('/order', function () {
    return view('customer');
});

// show form - add new order
Route::get('/customer/create', 'App\Http\Controllers\OrderController@create');

// save order details
Route::post('/customer/store', 'App\Http\Controllers\OrderController@store');

// display order details
Route::get('/customer/product', 'App\Http\Controllers\OrderController@showProduct');

// display product details for update
Route::get('/customer/product/edit/{id}', 'App\Http\Controllers\OrderController@indexProduct');

// update product details
Route::post('/customer/product/edit/', 'App\Http\Controllers\OrderController@editProduct');

// delete product details
Route::get('/customer/product/delete/{id}', 'App\Http\Controllers\OrderController@deleteProduct');

// display order details
Route::get('/customer/order', 'App\Http\Controllers\OrderController@showOrder');

// display order details for update
Route::get('/customer/order/edit/{id}', 'App\Http\Controllers\OrderController@indexOrder');

// update order details
Route::post('/customer/order/edit/', 'App\Http\Controllers\OrderController@editOrder');

// delete order details
Route::get('/customer/order/delete/{id}', 'App\Http\Controllers\OrderController@deleteOrder');