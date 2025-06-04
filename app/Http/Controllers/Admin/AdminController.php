<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\TugasAkhir;
use App\Models\User;
use App\Models\ActivityLog; // jika kamu menggunakan package log activity
use Carbon\Carbon;


class AdminController extends Controller
{
   

    public function index()
    {
        // Total data
        $totalBerita = Berita::count();

        $totalDosen = Dosen::count();

        $totalTugasAkhir = TugasAkhir::count();

        // Statistik Pengunjung Website bulanan
        $monthlyVisitors = [];
        $monthlyPageViews = [];

        // Misal data disimpan di tabel activity_logs (atau tracking logs tersendiri)
        $currentYear = Carbon::now()->year;
        for ($month = 1; $month <= 12; $month++) {
            $monthlyVisitors[] = ActivityLog::whereMonth('created_at', $month)
                ->whereYear('created_at', $currentYear)
                ->distinct('user_id')->count('user_id');

            $monthlyPageViews[] = ActivityLog::whereMonth('created_at', $month)
                ->whereYear('created_at', $currentYear)
                ->count();
        }

        // Aktivitas terbaru (opsional)
        $latestActivities = ActivityLog::latest()->take(10)->get();

        return view('admin.index', [
            'totalBerita' => $totalBerita,
            'totalDosen' => $totalDosen,

            'totalTugasAkhir' => $totalTugasAkhir,
            'monthlyVisitors' => $monthlyVisitors,
            'monthlyPageViews' => $monthlyPageViews,
            'latestActivities' => $latestActivities,
        ]);
    }
}
