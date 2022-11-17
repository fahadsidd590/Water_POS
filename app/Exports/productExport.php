<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class productExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $products = DB::table('products')->select('product_id','product_name','category_name','sub_cate_name','brand_name','product_unit',
        'product_SKU','product_min_qty','product_qty','product_desc','product_price')
        ->join('categories', 'categories.id', '=', 'products.cate_id')
        ->join('subcategories', 'subcategories.sub_cate_id', '=', 'products.sub_cate_id')
        ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
        ->get();
        return $products;
    }
    public function headings(): array
    {
        return [
            'S:no','Product name','Category name','Sub category name','Brand name','Product Unit','Product SKU','Product minimum quantity','Product quantity','Product Description','Product Price',
        ];
    }
}
