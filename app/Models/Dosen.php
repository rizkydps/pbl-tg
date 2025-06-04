<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    protected $fillable = [
        'foto',
        'nama',
        'jabatan',
        'jabatan_lainnya',
        'link_scopus',
        'link_sinta',
        'link_google_scholar',
    ];
}