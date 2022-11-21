<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;


class supplierController extends Controller
{
    public function index()
    {
        $supplier = supplier::orderBy('id', 'desc')->paginate(5);
        return view('supplierlist', compact('supplier'));
    }
    public function edit($id)
    {
        $supplier = supplier::find($id);
        return view('editsupplier', ['supplier' => $supplier]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'address' => 'required',
            'email' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);
        $supplier = supplier::find($id);
        $supplier->Name = $request->input('name');
        $supplier->Phone = $request->input('phone');
        $supplier->Email = $request->input('email');
        $supplier->country = $request->input('country');
        $supplier->City = $request->input('city');
        $supplier->Address = $request->input('address');
        $supplier->Description = $request->input('description');
        $supplier->update();
        return redirect('/supplierlist')->with('success', 'supplier has been updated');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'description' => 'required',

        ]);
        $supplier = new supplier();
        $supplier->Name = $request->input('name');
        $supplier->Phone = $request->input('phone');
        $supplier->Email = $request->input('email');
        $supplier->country = $request->input('country');
        $supplier->City = $request->input('city');
        $supplier->Address = $request->input('address');
        $supplier->Description = $request->input('description');
        $supplier->save();
        return redirect()->route('addsupplier')->with('success', 'supplier has been created successfully.');
    }

    public function destroy($id)
    {

        try {
            supplier::find($id)->delete($id);
            return response()->json([
                'success' => 'Record  deleted successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'unsuccess' => 'Record not deleted successfully!'
            ]);
        }
    }
}
