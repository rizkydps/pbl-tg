<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function show()
    {
        $visimisi = VisiMisi::first();
        return view('visimisi', compact('visimisi')); // untuk landing page
    }

    public function index()
    {
        $visimisi = VisiMisi::first();
        return view('admin.visimisi.index', compact('visimisi'));
    }

    public function edit($id)
    {
        $visimisi = VisiMisi::findOrFail($id);
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'visi' => 'nullable',
        'misi' => 'nullable',
    ]);

    $visimisi = VisiMisi::findOrFail($id);
    $visimisi->update($request->only(['title', 'visi', 'misi']));

    return redirect()->route('visimisi.index')->with('success', 'Data berhasil diperbarui.');
}

}
