<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'title',
        'description_1',
        'description_2',
        'description_3',
        'years_experience',
        'total_alumni',
        'expertise_fields',
        'accreditation',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'years_experience' => 'integer',
        'total_alumni' => 'integer',
        'expertise_fields' => 'integer'
    ];

    // Scope untuk mendapatkan data aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Method untuk mendapatkan data aktif (singleton)
    public static function getActive()
    {
        return self::active()->first() ?? new self();
    }
}