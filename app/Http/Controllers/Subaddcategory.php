<?php

namespace App\Http\Controllers;
use App\Models\subcategory;
use Illuminate\Http\Request;
use DB;
class Subaddcategory extends Controller
{
    public function index(){
        $category = DB::table('categories')->get(); 
       
        return view('subaddcategory',['category'=>$category]);
    }
    public function fetch_subcategory($id){
        
        $brands =  DB::table('subcategories')->where('cate_id',$id)->get();
        return response()->json(['brands'=>$brands,]);
    }
    public function show(){
        $subcategory = DB::table('subcategories')
        ->join('categories', 'categories.id', '=', 'subcategories.cate_id')       
        ->get();
        return view('subcategorylist',['subcategory'=>$subcategory]);
    }
    public function store(Request $request){
        $request->validate([
            'category_name'=>'required',
            'sub_category_name'=>'required',
            'sub_category_code'=>'required',
            'sub_category_desc'=>'required'
        ]);
        // 'sub_cate_name', 'sub_cate_code', 'sub_cate_desc','cate_id'
        $subcategory = new subcategory();
        $subcategory->cate_id= $request->input('category_name');
        $subcategory->sub_cate_name= $request->input('sub_category_name');
        $subcategory->sub_cate_code= $request->input('sub_category_code');
        $subcategory->sub_cate_desc= $request->input('sub_category_desc');
        $subcategory->save();

        return redirect()->route('addsubcategory')->with('success','Category has been created successfully.');
    }
    public function edit($sub_cate_id)
    {      
        $category1 = DB::table('subcategories')->where('sub_cate_id', $sub_cate_id)->first();
        $category = DB::table('categories')->get();
        return view('editsubcategory',['subcategory'=>$category1,'category'=>$category]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'=>'required',
            'sub_cate_name'=>'required',
            'sub_cate_code'=>'required',
            'sub_cate_desc'=>'required'
        ]);
      
        DB::table('subcategories')->where('sub_cate_id', $id)->update(['cate_id' => $request->input('category_name'),
       'sub_cate_name'=>$request->input('sub_cate_name'), 'sub_cate_code'=>$request->input('sub_cate_code'),'sub_cate_desc'=>$request->input('sub_cate_desc')]);
        return redirect('/subcategorylist')->with('success', 'Category has been updated');
    }
}
