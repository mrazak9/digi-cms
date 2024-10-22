<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Approval;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Patner;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Type;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Shetabit\Visitor\Facade\Visitor;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pages = page::when($request->input('title'), function ($query, $title) {
            return $query->where('title', 'like', '%' . $title . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(10);
        $type_menu = 'page';
        return view('pages.admin.pages.index', compact('pages', 'type_menu'));
    }

    public function create()
    {

        return view('pages.admin.pages.create', ['type_menu' => 'page']);
    }

    public function store(PageRequest $request)
    {
        $data = $request->validated();

        $data['is_show'] = $data['is_show'] == 'true' ? true : false;
        $loggedInUserId = Auth::id();
        $data['created_by'] = $loggedInUserId;
        $data['updated_by'] = $loggedInUserId;
        if ($request->seo_title == "") {
            $data['seo_title'] = $request->title . ' - ' . config('app.seo.default_title');
        }
        $slug = SlugService::createSlug(Page::class, 'slug', $data['title']);
        // Upload Banner
        if ($request->hasFile('banner')) {
            $bannerFileName = $slug . '.' . $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->storeAs('public/uploads/pages/banner', $bannerFileName);
            $data['banner'] = 'uploads/pages/banner/' . $bannerFileName;
        }

        // Upload Image
        if ($request->hasFile('image')) {
            $imageFileName = $slug . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/pages/image', $imageFileName);
            $data['image'] = 'uploads/pages/image/' . $imageFileName;
        }

        $page = Page::create($data);

        $approved = new Approval();
        $approved->slug = $page->slug;
        $approved->status = $page->type != 'default' ? 'publish' : 'pending';
        $approved->approved_by = $loggedInUserId;
        $approved->save();

        return redirect()->route('pages.index')->with('success', 'Page created successfully!');
    }


    public function show(Page $page)
    {
        $type_menu = 'page';
        return view('pages.admin.pages.show', compact('page', 'type_menu'));
    }

    public function edit(Page $page)
    {
        $type_menu = 'page';
        return view('pages.admin.pages.edit', compact('page', 'type_menu'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $data = $request->validated();
        $data['is_show'] = $data['is_show'] == 'true' ? true : false;
        $loggedInUserId = Auth::id();
        $data['updated_by'] = $loggedInUserId;
        $imageFileName = '';
        $page->slug = null;
        $slug = SlugService::createSlug(Page::class, 'slug', $data['title']);

        if ($request->seo_title == "") {
            $data['seo_title'] = $request->title . ' - ' . config('app.seo.default_title');
        }
        // Update Banner
        if ($request->hasFile('banner')) {
            $bannerFileName = $slug . '.' . $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->storeAs('public/uploads/pages/banner', $bannerFileName);
            $data['banner'] = 'uploads/pages/banner/' . $bannerFileName;

            // Hapus file lama jika berhasil mengupload file baru
            if ($page->banner) {
                Storage::delete($page->banner);
            }
        }

        if ($request->hasFile('image')) {
            $imageFileName = $slug . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/pages/image', $imageFileName);
            $data['image'] = 'uploads/pages/image/' . $imageFileName;

            // Hapus file lama jika berhasil mengupload file baru
            if ($page->image) {
                Storage::delete($page->image);
            }
        }

        $page->update($data);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }


    public function destroy(Page $page)
    {
        $page->delete();
        Storage::delete('public/' . $page->image);
        Storage::delete('public/' . $page->banner);


        return redirect()->route('pages.index')->with('success', 'Page deleted successfully!');
    }

    function show_page(Request $request, $slug)
    {
        $visitor = Visitor();

        $platform = $request->visitor()->platform();
        $languages  = $request->visitor()->languages();
        $browser   = $request->visitor()->browser();

        $data_visitor = [
            'platform' => $platform,
            // 'languages' => $languages[0],
            'browser' => $browser,
            'slug' => $slug
        ];
        $page = Page::where('slug', $slug)
            // ->whereHas('approval', function ($query) {
            //     $query->where('status', 'publish');
            // })
            ->withTotalVisitCount()
            ->first();

        if ($page) {
            if ($page->type == 'service_list') {
                $type = Type::where('slug', $slug)->first();
                $posts = Post::where('type_id', $type->id)
                    // ->whereHas('approval', function ($query) {
                    //     $query->where('status', 'publish');
                    // })
                    ->withTotalVisitCount()->paginate(5);

                $categories = Post::getAllCategoriesWithCount();

                // return $categories;
                // Jika ditemukan, tampilkan halaman
                $page->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
                return view('pages.frontend.pages.list', compact('page', 'posts', 'categories'));
            }
            if ($page->type == 'service_gallery') {
                $type = Type::where('slug', $slug)->first();
                $posts = Post::where('type_id', $type->id)
                    // ->whereHas('approval', function ($query) {
                    //     $query->where('status', 'publish');
                    // })
                    ->withTotalVisitCount()->paginate(5);
                $categories = Post::getAllCategoriesWithCount();

                // return $categories;
                // Jika ditemukan, tampilkan halaman
                $page->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
                return view('pages.frontend.pages.gallery', compact('page', 'posts', 'categories'));
            }

            if ($page->type == 'patners') {
                $type = Type::where('slug', $slug)->first();
                $patners = Patner::all();
                return view('pages.frontend.pages.patners', compact('page', 'patners'));
            }

            if (Str::contains($page->slug, ['contact'])) {
                // Jika ditemukan, tampilkan halaman
                $page->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
                return view('pages.frontend.pages.contact', compact('page'));
            }

            if ($page->type == 'cari') {
                // Jika ditemukan, tampilkan halaman
                $query = $request->input('query');
                $categories = Post::getAllCategoriesWithCount();
                $pages = Page::where('title', 'like', "%$query%")->get();
                $posts = Post::where('title', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->orWhere(function ($postQuery) use ($query) {
                        $postQuery->where('categories', 'like', "%$query%");
                    })->whereHas('approval', function ($query) {
                        $query->where('status', 'publish');
                    })
                    ->get();

                $page->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
                return view('pages.frontend.pages.search', compact('page', 'pages', 'posts', 'categories', 'query'));
            }
            if ($page->type == 'default') {
                // Jika ditemukan, tampilkan halaman
                $categories = Post::getAllCategoriesWithCount();
                $page->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
                return view('pages.frontend.pages.default', compact('page', 'categories'));
            }
        } else {
            // Jika tidak ditemukan, cari di posting
            $post = Post::where('slug', $slug)
                // ->whereHas('approval', function ($query) {
                //     $query->where('status', 'publish');
                // })
                ->withTotalVisitCount()->first();
            if ($post) {
                $type = Type::findOrFail($post->type_id);
                $page = Page::where('slug', $type->slug)->whereHas('approval', function ($query) {
                    $query->where('status', 'publish');
                })->first();
                $allpost = Post::where('type_id', $post->type_id)->withTotalVisitCount()->get();
                $categories = Post::getAllCategoriesWithCount();

                $galleries = Gallery::where('post_id', $post->id)->get();

                $previousPost = Post::where('type_id', $post->type_id)
                    ->where('id', '<', $post->id)
                    ->orderBy('created_at', 'desc')
                    ->withTotalVisitCount()
                    ->first();

                $nextPost = Post::where('type_id', $post->type_id)
                    ->where('id', '>', $post->id)
                    ->orderBy('created_at', 'asc')
                    ->withTotalVisitCount()
                    ->first();


                $post->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
                // Jika ditemukan, tampilkan detail post
                return view('pages.frontend.pages.detail', compact('visitor', 'allpost', 'categories', 'page', 'post', 'previousPost', 'nextPost', 'galleries'));
            } else {
                // Jika tidak ditemukan, mungkin tindakan lain
                abort(404);
            }
        }
    }
}
