<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['sub_cate_name', 'sub_cate_code', 'sub_cate_desc','cate_id'];
}
