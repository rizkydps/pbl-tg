<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminDosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lainnya' => 'nullable|string|max:255',
            'link_scopus' => 'nullable|url',
            'link_sinta' => 'nullable|url',
            'link_google_scholar' => 'nullable|url',
        ]);

        $foto = $request->file('foto');
        $fotoPath = $foto->store('dosen', 'public');

        Dosen::create([
            'foto' => $fotoPath,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jabatan_lainnya' => $request->jabatan_lainnya,
            'link_scopus' => $request->link_scopus,
            'link_sinta' => $request->link_sinta,
            'link_google_scholar' => $request->link_google_scholar,
        ]);

        return redirect()->route('admin.dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lainnya' => 'nullable|string|max:255',
            'link_scopus' => 'nullable|url',
            'link_sinta' => 'nullable|url',
            'link_google_scholar' => 'nullable|url',
        ]);

        $dosen = Dosen::findOrFail($id);

        $updateData = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jabatan_lainnya' => $request->jabatan_lainnya,
            'link_scopus' => $request->link_scopus,
            'link_sinta' => $request->link_sinta,
            'link_google_scholar' => $request->link_google_scholar,
        ];

        if ($request->hasFile('foto')) {
            // Delete old photo
            if ($dosen->foto) {
                Storage::disk('public')->delete($dosen->foto);
            }

            $foto = $request->file('foto');
            $fotoPath = $foto->store('dosen', 'public');
            $updateData['foto'] = $fotoPath;
        }

        $dosen->update($updateData);

        return redirect()->route('admin.dosen.index')->with('success', 'Dosen berhasil diubah.');
    }

    public function delete($id)
    {
        $dosen = Dosen::findOrFail($id);

        // Delete photo
        if ($dosen->foto) {
            Storage::disk('public')->delete($dosen->foto);
        }

        $dosen->delete();

        return redirect()->route('admin.dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }
}