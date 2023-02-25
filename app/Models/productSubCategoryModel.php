<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productSubCategoryModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_sub_categories';
    protected $fillable = [
        'sub_category_name',
        'category_name',
        'categegory_id',
    ];
    public function category()
    {
        return $this->hasOne(productCategoryModel::class, 'id', 'categegory_id');
    }
}
