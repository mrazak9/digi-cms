<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $typeId_artikel = Type::where('slug', 'artikel')->value('id');
        $typeId_berita = Type::where('slug', 'berita')->value('id');
        $typeId_pengumuman = Type::where('slug', 'pengumuman')->value('id');
        $articles = Post::where('type_id', $typeId_artikel)
            ->latest('created_at')
            ->take(10)
            ->get();
        // dd($articles);
        $last_news = Post::where('type_id', $typeId_berita)
            ->latest('created_at')
            ->take(10)
            ->get();
        $pengumuman = Post::where('type_id', $typeId_pengumuman)
            ->latest('created_at')
            ->take(10)
            ->get();
        $logo_dinasTerkaitSettings = GeneralSetting::where('name_setting', 'like', '%logo_dinas_terkait%')
            ->where('value', '!=', '-')
            ->get()
            ->pluck('value', 'name_setting');

        $list_category = Category::all();
        $sliders = Slider::all();
        $page = Page::where('slug', 'beranda')->first();
        return view('pages.home.index', compact('page', 'articles', 'last_news', 'pengumuman', 'logo_dinasTerkaitSettings', 'list_category', 'sliders'));
    }
}
