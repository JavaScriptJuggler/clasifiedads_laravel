<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class priceConditionModel extends Model
{
    use HasFactory;
    protected $table = 'price_conditions';
    protected $fillable = [
        'condition_name',
    ];
}
