<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TugasAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
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
                           ->paginate(15);

        // Untuk dropdown filter tahun
        $tahunList = TugasAkhir::select('tahun_lulus')
                              ->distinct()
                              ->orderBy('tahun_lulus', 'desc')
                              ->pluck('tahun_lulus');

        return view('admin.tugas-akhir.index', compact('tugasAkhir', 'tahunList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tugas-akhir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:tugas_akhir,nim',
            'judul_ta' => 'required|string',
            'tahun_lulus' => 'required|integer|min:2000|max:' . (date('Y') + 5),
            'pembimbing' => 'required|string|max:255',
            'penguji' => 'required|string|max:255',
        ], [
            'nama_mahasiswa.required' => 'Nama mahasiswa harus diisi',
            'nim.required' => 'NIM harus diisi',
            'nim.unique' => 'NIM sudah terdaftar',
            'judul_ta.required' => 'Judul tugas akhir harus diisi',
            'tahun_lulus.required' => 'Tahun lulus harus diisi',
            'pembimbing.required' => 'Pembimbing harus diisi',
            'penguji.required' => 'Penguji harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
        }

        try {
            TugasAkhir::create($request->all());
            return redirect()->route('admin.tugas-akhir.index')
                           ->with('success', 'Data tugas akhir berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('failed', 'Terjadi kesalahan saat menambah data')
                           ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasAkhir $tugasAkhir)
    {
        return view('admin.tugas-akhir.edit', compact('tugasAkhir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasAkhir $tugasAkhir)
    {
        $validator = Validator::make($request->all(), [
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:tugas_akhir,nim,' . $tugasAkhir->id,
            'judul_ta' => 'required|string',
            'tahun_lulus' => 'required|integer|min:2000|max:' . (date('Y') + 5),
            'pembimbing' => 'required|string|max:255',
            'penguji' => 'required|string|max:255',
        ], [
            'nama_mahasiswa.required' => 'Nama mahasiswa harus diisi',
            'nim.required' => 'NIM harus diisi',
            'nim.unique' => 'NIM sudah terdaftar',
            'judul_ta.required' => 'Judul tugas akhir harus diisi',
            'tahun_lulus.required' => 'Tahun lulus harus diisi',
            'pembimbing.required' => 'Pembimbing harus diisi',
            'penguji.required' => 'Penguji harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
        }

        try {
            $tugasAkhir->update($request->all());
            return redirect()->route('admin.tugas-akhir.index')
                           ->with('success', 'Data tugas akhir berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('failed', 'Terjadi kesalahan saat mengubah data')
                           ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasAkhir $tugasAkhir)
    {
        try {
            $tugasAkhir->delete();
            return redirect()->route('admin.tugas-akhir.index')
                           ->with('success', 'Data tugas akhir berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('failed', 'Terjadi kesalahan saat menghapus data');
        }
    }
}