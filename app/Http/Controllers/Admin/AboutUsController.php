<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::latest()->paginate(10);
        return view('admin.about-us.index', compact('aboutUs'));
    }

    public function create()
    {
        return view('admin.about-us.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description_1' => 'required|string',
            'description_2' => 'required|string',
            'description_3' => 'required|string',
            'years_experience' => 'required|integer|min:1',
            'total_alumni' => 'required|integer|min:0',
            'expertise_fields' => 'required|integer|min:1',
            'accreditation' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Nonaktifkan semua data sebelumnya jika yang baru akan diaktifkan
        if ($request->has('is_active')) {
            AboutUs::where('is_active', true)->update(['is_active' => false]);
        }

        AboutUs::create([
            'title' => $request->title,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'years_experience' => $request->years_experience,
            'total_alumni' => $request->total_alumni,
            'expertise_fields' => $request->expertise_fields,
            'accreditation' => $request->accreditation,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.about-us.index')
            ->with('success', 'Data Tentang Kami berhasil ditambahkan.');
    }

    public function show(AboutUs $aboutUs)
    {
        return view('admin.about-us.show', compact('aboutUs'));
    }

    public function edit(AboutUs $aboutUs)
    {
        return view('admin.about-us.edit', compact('aboutUs'));
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description_1' => 'required|string',
            'description_2' => 'required|string',
            'description_3' => 'required|string',
            'years_experience' => 'required|integer|min:1',
            'total_alumni' => 'required|integer|min:0',
            'expertise_fields' => 'required|integer|min:1',
            'accreditation' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Nonaktifkan semua data sebelumnya jika yang ini akan diaktifkan
        if ($request->has('is_active') && !$aboutUs->is_active) {
            AboutUs::where('is_active', true)->update(['is_active' => false]);
        }

        $aboutUs->update([
            'title' => $request->title,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'years_experience' => $request->years_experience,
            'total_alumni' => $request->total_alumni,
            'expertise_fields' => $request->expertise_fields,
            'accreditation' => $request->accreditation,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.about-us.index')
            ->with('success', 'Data Tentang Kami berhasil diperbarui.');
    }

    public function destroy(AboutUs $aboutUs)
    {
        $aboutUs->delete();
        
        return redirect()->route('admin.about-us.index')
            ->with('success', 'Data Tentang Kami berhasil dihapus.');
    }

    public function toggleStatus(AboutUs $aboutUs)
    {
        if (!$aboutUs->is_active) {
            // Nonaktifkan semua data lain
            AboutUs::where('is_active', true)->update(['is_active' => false]);
        }
        
        $aboutUs->update(['is_active' => !$aboutUs->is_active]);
        
        $status = $aboutUs->is_active ? 'diaktifkan' : 'dinonaktifkan';
        
        return redirect()->back()
            ->with('success', "Data Tentang Kami berhasil {$status}.");
    }
}