<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Contoh pada PagesController
    public function search(Request $request)
    {

        $page = Page::where('slug', 'search')->first();
        $visitor = Visitor();

        $platform = $request->visitor()->platform();
        $languages  = $request->visitor()->languages();
        $browser   = $request->visitor()->browser();
        $data_visitor = [
            'platform' => $platform,
            'languages' => $languages[0],
            'browser' => $browser,
            'slug' => $page->slug
        ];
        $query = $request->input('query');
        $pages = [];
        $posts = [];
        $categories = Post::getAllCategoriesWithCount();
        if (count($request->query) == 1) {
            $pages = Page::where('title', 'like', "%$query%")->whereHas('approval', function ($query1) {
                $query1->where('status', 'publish');
            })->get();
            $posts = Post::where(function ($postQuery) use ($query) {
                $postQuery->where('title', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->orWhere('categories', 'like', "%$query%");
            })
                // Hanya pilih post yang memiliki status approval = publish
                ->whereHas('approval', function ($approvalQuery) {
                    $approvalQuery->where('status', 'publish');
                })
                ->get();
        }

        $page->visit()->hourlyIntervals()->withIP()->withSession()->withUser()->withData($data_visitor);
        return view('pages.pages.search', compact('page', 'pages', 'posts', 'categories', 'query'));
    }
}
