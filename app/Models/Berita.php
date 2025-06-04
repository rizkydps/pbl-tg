<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'image',
        'title',
        'description',
        'date'
    ];

    public function getFormattedDateDMYAttribute()
{
    return Carbon::parse($this->date)->format('d M Y');  // Format '18 Dec 2024'
}

public function getFormattedDateDFYAttribute()
{
    return Carbon::parse($this->date)->format('d F Y');  // Format '18 December 2024'
}
}
