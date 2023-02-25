<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productCategoryModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_categories';
    protected $fillable = [
        'category_name',
    ];
}
