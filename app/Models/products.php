<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'cate_id', 'sub_cate_id','brand_id','product_unit','product_SKU','product_min_qty','product_qty','product_desc','product_price','product_img'];
}
