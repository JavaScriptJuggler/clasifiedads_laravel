<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class adsModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ads';
    protected $fillable = [
        'product_name',
        'product_image',
        'product_category',
        'product_sub_category',
        'price',
        'product_condition',
        'ad_category',
        'ads_color',
        'product_description',
        'product_category_id',
        'product_subcategory_id',
        'ad_category_id',
        'price_condition',
        'price_condition_id',
        'date',
        'user_id',
        'user_type',
        'seller_type',
        'location',
    ];
}
