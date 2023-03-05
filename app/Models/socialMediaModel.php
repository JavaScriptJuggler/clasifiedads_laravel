<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialMediaModel extends Model
{
    use HasFactory;
    protected $table = 'social_media';
    protected $fillable = [
        'social_media',
        'facebook',
        'tweeter',
        'linkedin',
        'instagram',
        'youtube',
        'whatsapp',
        'user_id',
        'website',
    ];
}
