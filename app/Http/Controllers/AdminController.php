<?php

namespace App\Http\Controllers;

use App\Models\Laravisit;
use App\Models\LoginLog;
use App\Models\Page;
use App\Models\Post;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        $types = Type::all();
        $posts = Post::all();
        $pages = Page::all();
        dd($pages);
        $jumlah_post = $posts->count();
        $jumlah_page = $posts->count();
        return view('pages.app.dashboard.', compact('types', 'jumlah_post', 'jumlah_page'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You signed out!');
    }

    function show_activity()
    {
        $user_id = auth()->user()->id;
        $time = '';
        $loginLogs = LoginLog::where('user_id', $user_id)
            ->whereDate('created_at', now()->toDateString()) // Menampilkan log hanya pada hari ini
            ->latest()
            ->take(10)
            ->get()
            ->map(function ($loginLog) {
                $loginLog->formatted_created_at = Carbon::parse($loginLog->created_at)->diffForHumans();
                return $loginLog;
            });
        // return $loginLogs;
        $type_menu = '';
        return view('pages.admin.activities', compact('type_menu', 'loginLogs'));
    }

    public function displayVisitors()
    {
        // Ambil data dari tabel laravisits
        $visitorsPostData =
            Post::withTotalVisitCount()
            ->orderByDesc('visit_count_total')
            ->take(8)
            ->get();

        $visitorsPageData =
            Page::withTotalVisitCount()
            ->orderByDesc('visit_count_total')
            ->take(5)
            ->get();

        $combinedData = $visitorsPostData->merge($visitorsPageData);
        $totalVisits = $combinedData->sum('visit_count_total');

        $filteredData = $combinedData->filter(function ($item) {
            return $item->visit_count_total > 0;
        });
        $result = $filteredData->map(function ($item) use ($totalVisits) {
            $percentage = ($item->visit_count_total / $totalVisits) * 100;

            return [
                'title' => $item->title,
                'total' => $item->visit_count_total,
                'percentage' => $percentage,
            ];
        })->sortByDesc('total');


        // Kembalikan hasil ke view
        return $result;
    }

    function visitorLasWeek()
    {
        // Ambil data untuk minggu ini
        $startDate = Carbon::now()->startOfWeek(); // Mulai dari hari Senin
        $endDate = Carbon::now()->endOfWeek(); // Selesai pada hari Minggu

        // Query untuk menghitung jumlah data per hari
        $dataPerDay = Laravisit::whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('l'); // Hari dalam format teks (Senin, Selasa, dst.)
            })
            ->map(function ($items) {
                return $items->count();
            });

        // Inisialisasi jumlah data untuk setiap hari dalam seminggu
        $result = [
            'Monday' => 0,
            'Tuesday' => 0,
            'Wednesday' => 0,
            'Thursday' => 0,
            'Friday' => 0,
            'Saturday' => 0,
            'Sunday' => 0,
        ];

        // Menggabungkan hasil perhitungan dengan inisialisasi
        $result = array_merge($result, $dataPerDay->toArray());

        return $result;
    }

    public function showBrowserData()
    {
        $browserData = Laravisit::select(DB::raw("JSON_EXTRACT(data, '$.browser') as browser"), DB::raw('count(*) as count'))
            ->groupBy('browser')
            ->get();

        return $browserData;
    }

    public function showPlatformData()
    {

        $platformData = Laravisit::select(DB::raw("JSON_EXTRACT(data, '$.platform') as platform"), DB::raw('count(*) as count'))
            ->groupBy('platform')
            ->get();
        $totalVisits = $platformData->sum('count');
        $platformData = $platformData->map(function ($item) use ($totalVisits) {
            $item->percentage = ($item->count / $totalVisits) * 100;
            return $item;
        });

        return $platformData;
    }
}
