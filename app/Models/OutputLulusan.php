<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OutputLulusan extends Model
{
    use HasFactory;
    protected $table = 'output_lulusans';
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
}
