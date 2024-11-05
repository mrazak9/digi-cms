<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $type_menu = 'settings';
        return view('pages.admin.menus.index', compact('menus', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'settings';
        $pages = Page::all();
        $pages_data = Page::select('title', 'slug')->get();
        $posts_data = Post::select('title', 'slug')->get();

        // Gabungkan kedua koleksi
        $mergedData = collect($pages_data)->concat($posts_data);
        $menus = Menu::all();
        return view('pages.admin.menus.create', compact('type_menu', 'pages', 'menus', 'mergedData'));
    }

    public function store(MenuRequest $request)
    {
        // return $request;
        $data = $request->validated();
        $loggedInUserId = Auth::id();
        $data['created_by'] = $loggedInUserId;
        $data['updated_by'] = $loggedInUserId;
        Menu::create($data);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully!');
    }

    public function show(Menu $menu)
    {
        $type_menu = 'settings';
        return view('pages.admin.menus.show', compact('menu', 'type_menu'));
    }

    public function edit(Menu $menu)
    {
        $type_menu = 'settings';

        $pages = Page::all();
        $menus = Menu::all();
        return view('pages.admin.menus.edit', compact('menu', 'type_menu', 'pages', 'menus',));
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $data = $request->validated();
        $loggedInUserId = Auth::id();
        $data['updated_by'] = $loggedInUserId;
        $menu->update($data);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully!');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully!');
    }

    public function generate(Request $request)
    {
        // Ambil semua data dari tabel pages
        $pages = Page::all();
        $loggedInUserId = Auth::id();

        foreach ($pages as $page) {
            // Cek apakah menu dengan slug yang sama sudah ada
            $existingMenu = Menu::where('slug_page', $page->slug)->orWhere('menu_name', $page->title)->first();

            // Jika menu dengan slug yang sama tidak ada, tambahkan ke menu
            if (!$existingMenu) {
                $menu = new Menu;
                $menu->menu_name = $page->title;
                $menu->slug_page = $page->slug;
                $menu->menu_status = 'Show Menu';
                $menu->sequence = 0;
                $menu->created_by = $loggedInUserId;
                $menu->updated_by = $loggedInUserId;
                $menu->save();
            }
        }

        return redirect()->route('menus.index')->with('success', 'Menu Generate successfully!');
    }

    public function showMenu()
    {
        $menus = Menu::getMenuTree();
        $type_menu = "";

        // return $menus;

        return view('pages.admin.menus.show-tree', compact('menus', 'type_menu'));
    }
}
