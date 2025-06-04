<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Berita;
use App\Models\AlasanBanner;
use App\Models\OutputLulusan;
use App\Models\AboutUs;
use App\Models\Partner;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Halaman utama/landing page
     */
    public function index()
    {
        $aboutUs = AboutUs::where('is_active', true)->first();
        $alasan = Alasan::all();
        $alasanBanner = AlasanBanner::all();
        $outputLulusans = OutputLulusan::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $partners = Partner::all();

        return view('index', compact(
            'aboutUs', 
            'outputLulusans', 
            'alasan', 
            'alasanBanner', 
            'beritas',
            'partners'
        ));
    }

    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita_detail', compact('berita'));
    }

    public function beritaLainnya()
    {
        $beritas = Berita::all();
        return view('berita_lainnya', compact('beritas'));
    }

    public function outputLulusanDetail($id)
    {
        $outputLulusan = OutputLulusan::findOrFail($id);
        return view('output_lulusan_detail', compact('outputLulusan'));
    }
}