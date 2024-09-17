<?php

namespace App\Http\Middleware;

use App\Models\Type;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoadTypes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $menu_types = Type::where('slug', 'not like', '%galeri%')->where('slug', 'not like', '%agenda%')->get();
        $menu_gallery = Type::where('slug', 'like', '%galeri%')->get();
        $menu_agenda = Type::where('slug', 'like', '%agenda%')->first();

        view()->share('menu_types', $menu_types);
        view()->share('menu_gallery', $menu_gallery);
        view()->share('menu_agenda', $menu_agenda);

        return $next($request);
    }
}
