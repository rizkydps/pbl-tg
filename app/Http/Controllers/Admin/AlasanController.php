<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alasan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlasanController extends Controller
{
    public function index()
    {
        $alasan = Alasan::all();
        return view('admin.alasan.index', compact('alasan'));
    }

    public function create()
    {
        return view('admin.alasan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Alasan::create([
            'name' => $request->name,
        ]);

        return redirect()->route('alasan.index');
    }

    public function edit($id)
    {
        $alasan = Alasan::findOrFail($id);
        return view('admin.alasan.edit', compact('alasan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $alasan = Alasan::findOrFail($id);
        $alasan->update([
            'name' => $request->name,
        ]);

        return redirect()->route('alasan.index');
    }

    public function destroy($id)
    {
        $alasan = Alasan::findOrFail($id);
        $alasan->delete();
        return redirect()->route('alasan.index');
    }

}
