<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salesproduct extends Model
{
    use HasFactory;
    protected $fillable = ['saleid','price','quantity'];
}
