<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    // show form - insert product
    public function create() {
        return view('CustomerManagement.create');
    }

    // save st details
    public function store() {

        $customer = new Customer();
        $order = new Order();

        $customer->customerName = request('customerName');
        $customer->contactNumber = request('contactNumber');
        $customer->itemName = request('itemName');
        $customer->model = request('model');
        $customer->brand = request('brand');
        $customer->noofItems = request('noofItems');
        $customer->pricePerUnit = request('pricePerUnit');
        $customer->paymentDetails = request('paymentDetails');

        // $order->supplierName = request('supplierName');
        // $order->companyName = request('companyName');       
        // $order->productID = request('productID');
        // $order->orderStatus = request('orderStatus');
        // $order->dates = request('date');

        $customer->save();
        // $order->save();

        return redirect('/home');
    }

    // display product details
    public function showProduct() {

        $products = Customer::all();

        return view('CustomerManagement.product', [
            'products' => $products
        ]);

    }

    // display product details for update
    public function indexProduct($id) {
        
        $products = Customer::find($id);
        return view('CustomerManagement.editProduct', ['product' => $products]);

    }

    // update product details
    public function editProduct(Request $req) {
        $updatedProduct = Customer::find($req->id);

        $updatedProduct->customerName = request('customerName');
        $updatedProduct->contactNumber = request('contactNumber');
        $updatedProduct->itemName = request('itemName');
        $updatedProduct->model = request('model');
        $updatedProduct->brand = request('brand');
        $updatedProduct->noofItems = request('noofItems');
        $updatedProduct->pricePerUnit = request('pricePerUnit');
        $updatedProduct->paymentDetails = request('paymentDetails');

        $updatedProduct->save();

        return redirect('/customer/product');
    }

    // delete product
    public function deleteProduct($id) {

        $product = Customer::find($id);
        $product->delete();

        return redirect('/customer/product');

    }

    // show order details
    public function showOrder() {

        $orders = Order::all();

        return view('CustomerManagement.order', [
            'orders' => $orders
        ]);

    }

    // display order details for update
    public function indexOrder($id) {

        $order = Order::find($id);
        return view('CustomerManagement.editOrder', ['order' => $order]);

    }

    // update order details
    public function editOrder(Request $req) {

        $updatedOder = Order::find($req->id);

        $updatedOder->supplierName = request('supplierName');
        $updatedOder->companyName = request('companyName');
        //$updatedOder->productID = request('productID');
        $updatedOder->orderStatus = request('orderStatus');
        // $updatedOder->dates = request('date');

        $updatedOder->save();

        return redirect('/customer/order');

    }

    // delete product
    public function deleteOrder($id) {

        $order = Order::find($id);
        $order->delete();

        return redirect('/customer/order');

    }
}
