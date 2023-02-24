<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adsCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'ads_categories';
    protected $fillable = [
        'ad_category_name',
        'ad_category_color',
    ];
}
