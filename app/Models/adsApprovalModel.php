<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adsApprovalModel extends Model
{
    use HasFactory;
    protected $table = 'ads_approval';
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
        'city_id',
        'city_name',
        'units',
        'payment_mode',
        'tags',
        'cover_image',
        'service_area',
        'main_ad_id',
    ];
}
