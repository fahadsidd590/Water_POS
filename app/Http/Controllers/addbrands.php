<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;
use DB;
class addbrands extends Controller
{
    public function index()
    {
        $brands = brands::orderBy('brand_id', 'desc')->paginate(5);
        return view('brandlist', ['brands' => $brands]);
    }
    public function create()
    {
        return view('addbrand');
    }
 
    public  function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
            'brand_desc' => 'required',
            'brand_image' => 'required'
        ]);
        $name = $request->file('brand_image')->getClientOriginalName();
        $size = $request->file('brand_image')->getSize();

        $path = $request->file('brand_image')->storeAs('brand_img/', $name, 'public');
        $brand = new brands();
        $brand->brand_image = $name;
        $brand->brand_name = $request->input('brand_name');
        $brand->brand_desc = $request->input('brand_desc');
        $brand->save();
        return redirect()->route('addbrand')->with('success', 'Brand has been created successfully.');
    }
    public function show(brands $brands)
    {
        return view('show', compact('brands'));
    }
    public function edit($id)
    {
        $brands =  DB::table('brands')->where('brand_id', $id)->first();
        return view('editbrand', ['brand' => $brands]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required',
            'brand_desc' => 'required',
            'brand_image'=>'required'
        ]);
        $name =$request->file('brand_image')->getClientOriginalName();
        $size= $request->file('brand_image')->getSize();
        $path=$request->file('brand_image')->storeAs('brand_img/',$name,'public');
        DB::table('brands')->where('brand_id', $id)->update(['brand_name' => $request->input('brand_name'),
        'brand_desc'=>$request->input('brand_desc'), 'brand_image'=>$name]);
        return redirect('brandlist')->with('success', 'Brand has been updated');
    }
}
