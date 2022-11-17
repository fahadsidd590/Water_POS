<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = customer::orderBy('id','desc')->paginate(5);
        return view('customerlist', compact('customer'));
    }
    public function edit($id)
    {      
        $customer = customer::find($id);
        return view('editcustomer',['customer'=>$customer]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'address'=>'required',
            'email'=>'required',
            'country'=>'required',
            'city'=>'required',
        ]);
        $customer = customer::find($id);
        $customer->Name = $request->input('name');
        $customer->Phone=$request->input('phone');
        $customer->Email=$request->input('email');
        $customer->country=$request->input('country');
        $customer->City=$request->input('city');
        $customer->Address=$request->input('address');
        $customer->Description=$request->input('description');    
        $customer->update();
        return redirect('/customerlist')->with('success', 'Customer has been updated');
    }
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'country' => 'required',
            'customer_city' => 'required',

            'customer_address' => 'required',
            'description' => 'required',
           
        ]);
        // ["name","Email","Phone","Country","City","Address","Description"];


        $customer = new customer();
        $customer->Name = $request->input('customer_name');
        $customer->Phone=$request->input('customer_phone');
        $customer->Email=$request->input('customer_email');
        $customer->country=$request->input('country');
        $customer->City=$request->input('customer_city');
        $customer->Address=$request->input('customer_address');
        $customer->Description=$request->input('description');    
        $customer->save();
        return redirect()->route('addcustomer')->with('success', 'customer has been created successfully.');
    }

    public function destroy($id)
    {
        
        try{
            customer::find($id)->delete($id);
            return response()->json([
                'success' => 'Record  deleted successfully!'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'unsuccess' => 'Record not deleted successfully!'
            ]);
        }
        
    }

}
