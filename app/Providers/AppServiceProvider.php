<?php

namespace App\Providers;

use App\Http\Controllers\AdminController;
use App\Models\Category;
use App\Models\FooterColumn;
use App\Models\GeneralSetting;
use App\Models\Laravisit;
use App\Models\LoginLog;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Patner;
use App\Models\Post;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();
        // $appStatus = GeneralSetting::where('name_setting', 'settings_status_app')->first();
        // $appStatus = 'installed';
        $appStatus = env('APP_STATUS');
        if ($appStatus === 'install') {
            // Tambahkan logika untuk mendapatkan data footer
            $footerLinks = FooterColumn::all();
            $footer_column_1 = FooterColumn::getByColumnName('1');
            $footer_column_2 = FooterColumn::getByColumnName('2');
            $services_link = Post::select('title', 'slug') // Hanya mengambil kolom title dan slug
                ->get();


            // Gunakan View Composer untuk mengirim data ke semua view
            View::composer('layouts.*', function ($view) use ($footerLinks, $footer_column_1, $footer_column_2, $services_link) {
                $view->with('footerLinks', $footerLinks);
                $view->with('service_links', $services_link);
                $view->with('footerColumn1', $footer_column_1);
                $view->with('footerColumn2', $footer_column_2);
            });

            // Ambil semua pengaturan
            $setting = GeneralSetting::pluck('value', 'name_setting');

            // Ambil menu utama beserta submenus
            $menu_setting = Menu::whereNull('main_menu')
                ->with('submenus') // ambil submenus dari menu
                ->orderBy('sequence')
                ->get();

            // Loop melalui setiap menu dan cek type berdasarkan slug_page
            foreach ($menu_setting as $menu) {
                // Cari type berdasarkan slug_page dari Menu di tabel Type
                $type = Type::where('slug', $menu->slug_page)->first();

                // Jika type ditemukan, ambil semua post berdasarkan type_id
                if ($type) {
                    $menu->posts = Post::where('type_id', $type->id)->get();
                } else {
                    $menu->posts = collect(); // Jika tidak ada type, buat collection kosong
                }
            }

            // Menggunakan View Composer untuk mengirim data ke semua view
            View::composer('*', function ($view) use ($setting, $menu_setting) {
                $view->with('gen_setting', $setting);
                $view->with('menu_setting', $menu_setting);
            });

            $typeId_artikel = Type::where('slug', 'artikel')->value('id');
            $articles = Post::where('type_id', $typeId_artikel)
                // ->whereHas('approval', function ($query) {
                //     $query->where('status', 'publish');
                // })
                ->latest('created_at')
                ->take(3)
                ->get();
            // dd($articles);
            $list_category = Category::all();
            // $url_dinasTerkaitSettings = GeneralSetting::where('name_setting', 'like', '%logo_dinas_terkait%')->get()->pluck('value', 'name_setting');

            View::composer('pages.posts.*', function ($view) use ($articles, $list_category) {
                $view->with('articles', $articles);
                $view->with('list_category', $list_category);
            });

            view()->composer('layouts.*', function ($view) {
                $socialMedia = SocialMedia::orderBy('order')->get();

                // Cek apakah ada data sosial media
                if ($socialMedia->isNotEmpty()) {
                    $view->with('socialMedia', $socialMedia);
                } else {
                    // Jika kosong, berikan nilai default (misalnya: array kosong)
                    $view->with('socialMedia', []);
                }
            });

            //Untuk tampilan Home Page
            view()->composer('pages.frontend.pages.index', function ($view) {

                //slider
                //content page (image + text)
                //call to action from contact
                //list services
                //list patners
                $typeId_service = Type::where('slug', 'our-services')->value('id');
                $services = Post::where('type_id', $typeId_service)
                    ->latest('created_at')
                    ->take(10)
                    ->get();
                $patners = Patner::all();
                $page = Page::where('slug', 'home')->first();
                $sliders = Slider::all();
                $view->with('sliders', $sliders);
                $view->with('patners', $patners);
                $view->with('services', $services);
                $view->with('page', $page);
            });

            View::composer('component.admin.header', function ($view) {
                $lastLoginTime = $this->getLastLoginTime();

                $view->with('lastLoginTime', $lastLoginTime);
            });

            //Dashboard Data
            view()->composer('pages.admin.dashboard', function ($view) {
                $types = Type::all();
                $users = User::all();

                $post_six = Post::latest()
                    // ->whereHas('approval', function ($query) {
                    //     $query->where('status', 'publish');
                    // })
                    ->take(6)->get();

                $posts = Post::
                    // whereHas('approval', function ($query) {
                    //     $query->where('status', 'publish');
                    // })->
                    withTotalVisitCount()->get();
                $pages = Page::
                    // whereHas('approval', function ($query) {
                    //     $query->where('status', 'publish');
                    // })
                    // ->
                    withTotalVisitCount()->get();
                $laravisit = Laravisit::whereDate('created_at', Carbon::today())
                    ->get();
                $totalVisitor = $laravisit->count();
                $jumlah_post = $posts->count();
                $jumlah_page = $pages->count();
                $jumlah_user = $users->count();

                $todayVisits = Laravisit::whereDate('created_at', Carbon::today())->count();
                $weekVisits = Laravisit::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
                $monthVisits = Laravisit::whereMonth('created_at', Carbon::now()->month)->count();
                $yearVisits = Laravisit::whereYear('created_at', Carbon::now()->year)->count();

                $data = [
                    'totalVisitor' => $totalVisitor,
                    'jumlah_post' => $jumlah_post,
                    'jumlah_page' => $jumlah_page,
                    'jumlah_user' => $jumlah_user,

                    'todayVisits' => $todayVisits,
                    'weekVisits' => $weekVisits,
                    'monthVisits' => $monthVisits,
                    'yearVisits' => $yearVisits,
                ];

                // Panggil fungsi dari YourController
                // Gunakan $result sesuai kebutuhan Anda, misalnya simpan ke dalam shared data
                $visitors = app(AdminController::class)->visitorLasWeek();
                $visitorsData = app(AdminController::class)->displayVisitors();
                $browserData = app(AdminController::class)->showBrowserData();
                $platformData = app(AdminController::class)->showPlatformData();

                $view->with('data', $data);
                $view->with('visitors', $visitors);
                $view->with('visitorsData', $visitorsData);
                $view->with('browserData', $browserData);
                $view->with('platformData', $platformData);
                $view->with('types', $types);
                $view->with('posts', $post_six);
            });
        }
    }

    protected function getLastLoginTime()
    {
        $user_id = auth()->user()->id;

        // Menggunakan "firstOr()" untuk mendapatkan entri pertama atau null jika tidak ada
        $loginLog = LoginLog::where('user_id', $user_id)
            ->where('activity_name', 'login')
            ->latest()
            ->firstOr(function () {
                return null;
            });

        // Pastikan $loginLog tidak null sebelum mengakses propertinya
        if ($loginLog) {
            $lastLoginTime = $loginLog->created_at;
            return Carbon::parse($lastLoginTime)->diffForHumans();
        }

        return 'never';
    }
}
