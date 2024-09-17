<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Http\Requests\PostRequest;
use App\Models\Agenda;
use App\Models\Approval;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $type_menu = 'post';
        if ($request->has('type_id')) {
            $type = Type::findOrFail($request->type_id);
            $posts = Post::where('type_id', $request->type_id)->paginate(10);
            if (strpos($type->slug, 'galeri') !== false) {
                $type_menu = 'galeri';
            }
            if (strpos($type->slug, 'agenda') !== false) {
                $type_menu = 'agenda';
            }
        } else {
            $posts = Post::paginate(10);
        }
        $type = Type::find($request->type_id);

        return view('pages.admin.posts.index', compact('posts', 'type_menu', 'type'));
    }

    public function create(Request $request)
    {
        // return $request;
        // Tampilkan formulir create
        $categories = Category::all();
        $type = Type::findOrFail($request->type_id);
        return view('pages.admin.posts.create', ['type_menu' => 'post', 'categories' => $categories, 'type' => $type]);
    }

    public function store(PostRequest $request)
    {
        // Validasi data menggunakan PostRequest
        $data = $request->validated();
        // Mengonversi array kategori menjadi string terpisah koma
        $data['categories'] = implode(',', $data['categories']);
        // return $data;
        $loggedInUserId = Auth::id();
        $data['created_by'] = $loggedInUserId;
        $data['updated_by'] = $loggedInUserId;
        $slug = SlugService::createSlug(Post::class, 'slug', $data['title']);
        $attachName = $request->nameFile != null ? $request->nameFile : $slug;

        // Simpan data ke dalam database
        if ($request->seo_title == "") {
            $data['seo_title'] = $request->title . ' - ' . config('app.seo.default_title');
        }
        // Upload Image
        if ($request->hasFile('image')) {
            $imageFileName = $slug . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/post/', $imageFileName);
            $data['image'] = 'uploads/post/' . $imageFileName;
        }

        if ($request->hasFile('attachment')) {
            $fileName = $attachName . '.' . $request->file('attachment')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/attachment/', $fileName);
            $data['attachment'] = 'uploads/attachment/' . $fileName;
        }
        $post = Post::create($data);

        $approved = new Approval();
        $approved->slug = $post->slug;
        $approved->status = 'pending';
        $approved->approved_by = $loggedInUserId;
        $approved->save();

        return redirect()->route('posts.index', ['type_id' => $post->type_id])->with('success', 'Post berhasil ditambahkan');
    }

    public function show(Post $post)
    {
        return redirect()->to('/' . $post->slug);
    }

    public function preview(Post $post)
    {
        return view('pages.admin.posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $type_menu = 'post';
        $categories = Category::all();
        $type = Type::findOrFail($post->type_id);
        // Tampilkan formulir edit
        return view('pages.admin.posts.edit', compact('post', 'type_menu', 'categories', 'type'));
    }

    public function update(PostRequest $request, Post $post)
    {
        // return $request;
        // Validasi data menggunakan PostRequest
        $data = $request->validated();
        $data['categories'] = implode(',', $data['categories']);
        $loggedInUserId = Auth::id();
        $data['updated_by'] = $loggedInUserId;
        $post->slug = null;
        $slug = SlugService::createSlug(Post::class, 'slug', $data['title']);


        $attachName = $request->nameFile != null ? $request->nameFile : $slug;

        // Perbarui data di dalam database
        if ($request->seo_title == "") {
            $data['seo_title'] = $request->title . ' - ' . config('app.seo.default_title');
        }
        // Update Image
        if ($request->hasFile('image')) {
            $imageFileName = $slug . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/post/', $imageFileName);
            $data['image'] = 'uploads/post/' . $imageFileName;

            // Hapus file lama jika berhasil mengupload file baru
            if ($post->image) {
                Storage::delete($post->image);
            }
        }
        // Update Attachment
        if ($request->hasFile('attachment')) {
            $fileName = $attachName . '.' . $request->file('attachment')->getClientOriginalExtension();
            $request->file('attachment')->storeAs('public/uploads/attachment/', $fileName);
            $data['attachment'] = 'uploads/attachment/' . $fileName;

            // Hapus file lama jika berhasil mengupload file baru
            if ($post->image) {
                Storage::delete($post->image);
            }
        }
        // return $data;
        $post->update($data);

        $dataToSave = [
            'location' =>  $request->location,
            'date' => $request->date,
            'notes' => $request->notes,
        ];
        $existingAgenda = Agenda::where('post_id', $post->id)
            ->first();
        if ($existingAgenda) {
            // Jika Agenda sudah ada, lakukan update
            $existingAgenda->update($dataToSave);
        } else {
            // Jika Agenda belum ada, buat data baru
            $dataToSave['post_id'] = $post->id;
            Agenda::create($dataToSave);
        }

        return redirect()->route('posts.index', ['type_id' => $post->type_id])->with('success', 'Post berhasil diperbaharui');
    }

    public function destroy(Post $post)
    {
        // Hapus data dari database
        $post->delete();
        Storage::delete('public/' . $post->image);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus');
    }


    public function approval(Request $request)
    {
        // return $request;
        $type_menu = 'post_settings';

        if ($request->status) {
            $status = $request->input('status');
            $posts = Post::where(function ($query) use ($status) {
                if ($status == 'pending') {
                    $query->whereHas('approval', function ($subQuery) use ($status) {
                        $subQuery->where('status', $status);
                    })->orWhereDoesntHave('approval');
                } elseif ($status == 'publish') {
                    $query->whereHas('approval', function ($subQuery) use ($status) {
                        $subQuery->where('status', $status);
                    });
                }
            })->paginate(10);

            $pages = Page::where('type', 'default')->where(function ($query) use ($status) {
                if ($status == 'pending') {
                    // Mencari page dengan status approval = pending atau page yang tidak ada di tabel approval
                    $query->whereHas('approval', function ($subQuery) use ($status) {
                        $subQuery->where('status', $status);
                    })->orWhereDoesntHave('approval');
                } elseif ($status == 'publish') {
                    // Mencari page dengan status approval = publish
                    $query->whereHas('approval', function ($subQuery) use ($status) {
                        $subQuery->where('status', $status);
                    });
                }
            })->paginate(10);
        } else {
            $posts = Post::orderBy('type_id')->paginate(10);
            $pages = Page::paginate(10);
            // $pages = Page::where('type', 'default')->get();
        }
        return view('pages.admin.posts.approval', compact('type_menu', 'posts', 'pages'));
    }

    public function setApproval(Request $request)
    {
        $userid = Auth::id();
        $approval = Approval::where('slug', $request->post_slug)->first();
        if ($approval) {
            $approved = $approval;
        } else {
            $approved = new Approval();
        }
        $approved->slug = $request->post_slug;
        $approved->status = $request->status;
        $approved->approved_by = $userid;
        $approved->save();

        return redirect()->back()->with('success', 'Post berhasil disimpan.');
    }

    public function showApprovalModal($id)
    {
        $post = Post::findOrFail($id);

        // Lakukan logika untuk menampilkan modal (sesuai kebutuhan aplikasi Anda)

        return view('posts.approval_modal', compact('post'));
    }

    public function filterByStatus(Request $request)
    {
        $status = $request->input('status');

        // Lakukan query untuk mendapatkan data sesuai dengan status
        $posts = Post::whereHas('approval', function ($query) use ($status) {
            $query->where('status', $status);
        })->get();

        return response()->json($posts);
    }
}
