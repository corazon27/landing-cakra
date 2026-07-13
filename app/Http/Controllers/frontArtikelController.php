<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class frontArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::where('status', 'published')
                        ->where('published_at', '<=', now());
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $articles = $query->latest('published_at')->paginate(6)->withQueryString();
        
        
        $popularArticles = Article::where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->orderBy('views', 'desc')
                            ->take(5)
                            ->get();
                            
        $latestArticles = Article::where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->latest('published_at')
                            ->take(5)
                            ->get();

        return view('front.artikel.index', compact('articles', 'popularArticles', 'latestArticles'));
    }

   public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        
        $popularArticles = Article::where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->orderBy('views', 'desc')
                            ->take(3)
                            ->get();
        
        // Previous Post
        $previous = Article::where('id', '<', $article->id)->orderBy('id', 'desc')->first();

        // Next Post
        $next = Article::where('id', '>', $article->id)->orderBy('id', 'asc')->first();

        // Related Posts: Ambil 3 artikel secara acak, kecuali artikel ini
        $related_posts = Article::where('id', '!=', $article->id)
                                ->inRandomOrder()
                                ->limit(3)
                                ->get();

        $article->increment('views');

        return view('front.artikel.detail', compact('article', 'previous', 'next', 'related_posts', 'popularArticles'));
    }
}