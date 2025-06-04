<?php

namespace App\Http\Controllers;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    /**
     * Display a listing of tugas akhir for public view
     */
    public function index(Request $request)
    {
        $query = TugasAkhir::query();

        // Filter berdasarkan tahun jika ada
        if ($request->filled('tahun')) {
            $query->byTahun($request->tahun);
        }

        // Pencarian jika ada
        if ($request->filled('search')) {
            $query->search($request->search);
        }

        $tugasAkhir = $query->orderBy('tahun_lulus', 'desc')
                           ->orderBy('nama_mahasiswa', 'asc')
                           ->paginate(20);

        // Untuk dropdown filter tahun
        $tahunList = TugasAkhir::select('tahun_lulus')
                              ->distinct()
                              ->orderBy('tahun_lulus', 'desc')
                              ->pluck('tahun_lulus');

        return view('tugas-akhir', compact('tugasAkhir', 'tahunList'));
    }
}