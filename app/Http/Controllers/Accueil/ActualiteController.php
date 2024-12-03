<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Contracts\Support\Renderable;

use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    const blog_status_active = 1 ; 
    const blog_status_principal = 2 ; 
    public function actualites()
    {
        $blogs = Blog::query()
            // ->whereIn('status', [1, 2])
            // ->orderBy('status', 'desc')
            ->latest()
            // ->orderBy('created_at', 'desc')
            ->paginate(4);

        // $blogs = Blog::all();
        $recentBlogs = Blog::limit(5)->latest()->get();

        return view('accueil.actualite.actualites', compact('blogs', 'recentBlogs'));
    }

    public function show($hash)
    {
        $blog = Blog::query()
            // ->whereIn('status', [1, 2])
            ->where('blog_hash', $hash) 
            ->firstOrFail();

        $recentBlogs = Blog::limit(5)->latest()->get();
        
    
    
        return view('accueil.actualite.show', compact('blog', 'recentBlogs'));
    }

}
