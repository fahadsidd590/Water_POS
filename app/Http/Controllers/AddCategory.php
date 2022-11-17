<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;
use DB;
use PhpParser\Node\Stmt\TryCatch;

class AddCategory extends Controller
{
    public function index(){
        $category = category::orderBy('id','desc')->paginate(5);
        return view('categorylist',['category'=>$category]);
    }
    public function create(){
        return view('addcategory');
    }
    public  function store(Request $request){
        $request->validate([
            'category_name'=>'required',
            'category_code'=>'required',
            'category_desc'=>'required',
            'category_image'=>'required'
        ]);
        $name =$request->file('category_image')->getClientOriginalName();
        $size= $request->file('category_image')->getSize();
       
        $path=$request->file('category_image')->storeAs('category_img/',$name,'public');
        $category = new category();
        $category->image= $name;
        $category->category_name= $request->input('category_name');
        $category->category_code= $request->input('category_code');
        $category->category_desc= $request->input('category_desc');
        $category->save();

        return redirect()->route('addcategory')->with('success','Category has been created successfully.');
        
    }
    public function show(category $category)
    {
        return view('show',compact('category'));
    }
    public function edit($id)
    {      
        $category1 = category::find($id);
        return view('editcategory',['category'=>$category1]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'category_code' => 'required',
            'category_desc' => 'required',
            'category_image'=>'required'
        ]);
        $name =$request->file('category_image')->getClientOriginalName();
        $size= $request->file('category_image')->getSize();
        $path=$request->file('category_image')->storeAs('category_img/',$name,'public');
        $category2 = category::find($id);
        $category2->image= $name;
        $category2->category_name=$request->input('category_name');
        $category2->category_code=$request->input('category_code');
        $category2->category_desc=$request->input('category_desc');
        $category2->update();
        return redirect('/categorylist')->with('success', 'Category has been updated');
    }
    public function destroy($id)
    {
        
        try{
            category::find($id)->delete($id);
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
