<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\OutputLulusan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminOutputLulusanController extends Controller
{
    public function index()
    {
        $outputLulusans = OutputLulusan::all();
        return view('admin.output_lulusan.index', compact('outputLulusans'));
    }

    public function create()
    {
        return view('admin.output_lulusan.create');   
    }

    public function store(Request $request) 
    {
        try {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:10000000',
            ]);
    
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
            }
    
            $allowedTags = '<p><a><b><strong><i><u><em><br><ol><li>';

            OutputLulusan::create([
                'image' => $imagePath,
                'title' => $request->title,
                'description' => strip_tags($request->description, $allowedTags),
            ]);
    
            return redirect()->route('admin.output-lulusan.index')->with('success', 'Berita berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.output-lulusan.index')->with('failed', 'Terjadi kesalahan, perubahan gagal!');
        }
    }

    public function edit($id)
    {
        $outputLulusan = OutputLulusan::findOrFail($id);
        return view('admin.output_lulusan.edit', compact('outputLulusan'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:10000000',
            ]);
    
            $outputLulusan = OutputLulusan::findOrFail($id);
    
            
            if ($request->hasFile('image')) {
                if ($outputLulusan->image && Storage::exists($outputLulusan->image)) {
                    Storage::delete($outputLulusan->image);
                }
                
                $path = $request->file('image')->store('images', 'public');
                $outputLulusan->image = $path;
            }
    
            $outputLulusan->title = $request->title;
            $allowedTags = '<p><a><b><strong><i><u><em><br><ol><li>';
            $outputLulusan->description = strip_tags($request->description, $allowedTags);
            
            $outputLulusan->save();
    
            return redirect()->route('admin.output-lulusan.index')->with('success', 'Output Lulusan Berhasil Diubah!');
        } catch (\Exception $e) {
            return redirect()->route('admin.output-lulusan.index')->with('failed', 'Terjadi kesalahan, perubahan gagal!');
        }
    }

    public function delete($id)
    {
        try {
            $outputLulusan = OutputLulusan::findOrFail($id);

            if ($outputLulusan->image && Storage::exists($outputLulusan->image)) {
                Storage::delete($outputLulusan->image);
            }

            $outputLulusan->delete();

            return redirect()->route('admin.output-lulusan.index')->with('success', 'Output Lulusan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.output-lulusan.index')->with('failed', 'Terjadi kesalahan, data gagal dihapus!');
        }
    }

}
