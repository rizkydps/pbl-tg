<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TugasAkhir extends Model
{
    use HasFactory;

    protected $table = 'tugas_akhir';

    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'judul_ta',
        'tahun_lulus',
        'pembimbing',
        'penguji'
    ];

    protected $casts = [
        'tahun_lulus' => 'integer'
    ];

    // Accessor untuk format tampilan
    public function getFormattedTahunLulusAttribute()
    {
        return $this->tahun_lulus;
    }

    // Scope untuk filter berdasarkan tahun
    public function scopeByTahun($query, $tahun)
    {
        return $query->where('tahun_lulus', $tahun);
    }

    // Scope untuk pencarian
    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('nama_mahasiswa', 'like', '%' . $search . '%')
              ->orWhere('nim', 'like', '%' . $search . '%')
              ->orWhere('judul_ta', 'like', '%' . $search . '%')
              ->orWhere('pembimbing', 'like', '%' . $search . '%')
              ->orWhere('penguji', 'like', '%' . $search . '%');
        });
    }
}