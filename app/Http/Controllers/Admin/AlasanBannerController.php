<?php

namespace App\Http\Controllers\Admin;

use App\Models\AlasanBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AlasanBannerController extends Controller
{
    public function index()
    {
        $alasanBanner = AlasanBanner::all();
        return view('admin.alasan_banner.index', compact('alasanBanner'));   
    }


    public function edit($id)
    {
        $alasanBanner = AlasanBanner::findOrFail($id);
        return view('admin.alasan_banner.edit', compact('alasanBanner'));
    }


    public function update(Request $request, $id)
    {
        try { 
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
    
            $alasanBanner = alasanBanner::findOrFail($id);
    
            
            if ($request->hasFile('image')) {
                if ($alasanBanner->image && Storage::exists($alasanBanner->image)) {
                    Storage::delete($alasanBanner->image);
                }
                
                $path = $request->file('image')->store('images', 'public');
                $alasanBanner->image = $path;
            }
    
            $alasanBanner->name = $request->name;
            
            $alasanBanner->save();
    
            return redirect()->route('admin.alasan-banner.index')->with('success', 'Banner Berhasil Diubah!');
        } catch (\Exception $e) {
            return redirect()->route('admin.alasan-banner.index')->with('failed', 'Terjadi kesalahan, perubahan gagal!');
        }
    }
}
