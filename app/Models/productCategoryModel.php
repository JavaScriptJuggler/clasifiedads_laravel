<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'product_categories';
    protected $fillable = [
        'category_name',
    ];
}
