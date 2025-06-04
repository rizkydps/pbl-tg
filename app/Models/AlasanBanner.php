<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlasanBanner extends Model
{
    protected $table = 'alasan_banners';
    protected $fillable = [
        'name',
        'image'
    ];
}
