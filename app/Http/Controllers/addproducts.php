<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use App\Exports\productExport;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class addproducts extends Controller
{
    public function index()
    {
        $categorys = DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        return view('addproduct', ['category' => $categorys, 'brands' => $brands]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'category_name' => 'required',
            'subcategory_name' => 'required',
            'brand' => 'required',
            'unit' => 'required',
            'SKU' => 'required',
            'minqty' => 'required',
            'quantity' => 'required',
            'pro_desc' => 'required',
            'price' => 'required',
            'pro_image' => 'required',
        ]);
        $name = $request->file('pro_image')->getClientOriginalName();
        $size = $request->file('pro_image')->getSize();
        //'product_name', 'cate_id', 'sub_cate_id','brand_id','product_unit',
        //'product_SKU','product_min_qty','product_qty','product_desc','product_price'
        $path = $request->file('pro_image')->storeAs('product_img/', $name, 'public');
        $product = new products();
        $product->product_name = $request->input('product_name');
        $product->cate_id = $request->input('category_name');
        $product->sub_cate_id = $request->input('subcategory_name');
        $product->brand_id = $request->input('brand');
        $product->product_unit = $request->input('unit');
        $product->product_SKU = $request->input('SKU');
        $product->product_min_qty = $request->input('minqty');
        $product->product_qty = $request->input('quantity');
        $product->product_desc = $request->input('pro_desc');
        $product->product_price = $request->input('price');
        $product->product_img = $name;
        $product->save();
        return redirect()->route('addproduct')->with('success', 'product has been created successfully.');
    }
    public function show()
    {
        $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.cate_id')
            ->join('subcategories', 'subcategories.sub_cate_id', '=', 'products.sub_cate_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->get();
        return view('productlist', ['products' => $products]);
    }
    public function edit($id)
    {
        $categorys = DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        $products =  DB::table('products')->where('product_id', '=', $id)->first();
        $sub_category = DB::table('subcategories')->where('cate_id', '=', $products->cate_id)->get();
        return view('editproduct', ['product' => $products, 'categorys' => $categorys, 'brands' => $brands, 'sub_cate' => $sub_category]);
    }
    public function edit_2($id)
    {

        $products =  DB::table('products')->where('product_id', '=', $id)->first();
        $brands = DB::table('brands')->where('brand_id', '=', $products->brand_id)->first();
        $categorys = DB::table('categories')->where('id', '=', $products->cate_id)->first();
        $sub_category = DB::table('subcategories')->where('sub_cate_id', '=', $products->sub_cate_id)->first();
        return view('product-details', ['product' => $products, 'categorys' => $categorys, 'brands' => $brands, 'sub_cate' => $sub_category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'category_name' => 'required',
            'subcategory_name' => 'required',
            'brand' => 'required',
            'unit' => 'required',
            'SKU' => 'required',
            'minqty' => 'required',
            'quantity' => 'required',
            'pro_desc' => 'required',
            'price' => 'required',
            'pro_image' => 'required',
        ]);
        $name = $request->file('pro_image')->getClientOriginalName();
        $size = $request->file('pro_image')->getSize();
        $path = $request->file('pro_image')->storeAs('product_img/', $name, 'public');
        DB::table('products')->where('product_id', $id)->update([
            'product_name' => $request->input('product_name'),
            'product_desc' => $request->input('pro_desc'), 'cate_id' => $request->input('category_name'),
            'sub_cate_id' => $request->input('subcategory_name'), 'brand_id' => $request->input('brand'),
            'product_unit' => $request->input('unit'), 'product_SKU' => $request->input('SKU'), 'product_min_qty' => $request->input('minqty'),
            'product_qty' => $request->input('quantity'), 'product_price' => $request->input('price'),
            'product_img' => $name
        ]);
        return redirect('productlist')->with('success', 'product has been updated');
    }
    public function export()
    {
       
        return Excel::download(new productExport, 'product.xlsx');
    }
    public function create_pdf(){
        $products = DB::table('products')->select('product_id','product_name','category_name','sub_cate_name','brand_name','product_unit',
        'product_SKU','product_min_qty','product_qty','product_desc','product_price','product_img')
        ->join('categories', 'categories.id', '=', 'products.cate_id')
        ->join('subcategories', 'subcategories.sub_cate_id', '=', 'products.sub_cate_id')
        ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
        ->get();
        
        $pdf = PDF::loadView('productlist',compact('products'));
      // download PDF file with download method
      return $pdf->download('products.pdf');
    }
    public function destroy($id)
    {
        $product_delete = DB::delete('delete from products where product_id = ?', [$id]);
        if ($product_delete) {
            return response()->json([
                'success' => 'Record  deleted successfully!'
            ]);
        } else {
            return response()->json([
                'unsuccess' => 'Record not deleted successfully!'
            ]);
        }
    }
}
