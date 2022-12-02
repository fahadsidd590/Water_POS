<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;
use App\Models\salesproduct;
use Illuminate\Support\Facades\DB;

class salesController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        $customer = DB::table('customers')->get();
        return view('add-sales', ['product' => $products, 'customer' => $customer]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required',
            'orderdate' => 'required',
            'status' => 'required',
            'paidamount' => 'required',
            'totalamount' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'Amount' => 'required',
        ]);
        $sale = new sale();
        $sale->customerid = $_POST['customer'];
        $sale->status = $_POST['status'];
      
        $sale->paidamount = $_POST['paidamount'];
        $sale->totalamount = $_POST['totalamount'];
        $sale->save();
        $salesid = $sale->id;

        foreach ($request->product_id as $key => $product_id) {
            $salesproduct  = new salesproduct();
            $salesproduct->saleid= $salesid;
            $salesproduct->price =$request->Amount[$key];
            $salesproduct->quantity= $request->quantity[$key];
            $salesproduct->save();
        }
        return redirect()->route('add-sales')->with('success', 'sale has been created successfully.');
    }
    public function getsales(){
        $products = DB::table('sales')->join('customers','sales.customerid','=','customers.id')->select('sales.*','customers.Name')->get();
        return view('saleslist', ['sales' => $products]);
    }
    public function edit($id)
    {
        $customer = DB::('sales')->('salesproducts','sales.id','=','salesproducts.saleid')
        ->join('products','salesproducts');
        return view('editcustomer', ['customer' => $customer]);
    }
}
