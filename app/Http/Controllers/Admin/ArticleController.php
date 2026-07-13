<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $articles = $query->latest()->paginate(10)->withQueryString();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:articles,title',
            'slug' => 'nullable|string|max:255',
            'alt_text' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:160',
            'schema' => 'nullable|string', // <-- Tambahkan validasi
            'content' => 'required',
            'status' => 'required|in:draft,published',
            'published_at' => 'required|date',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $thumbnailPath = $request->hasFile('thumbnail') 
            ? $request->file('thumbnail')->store('thumbnails', 'public') 
            : null;

        // Logika SEO Slug
        $slugBase = $request->slug ? $request->slug : $request->title;
        $slug = Str::slug($slugBase);
        $count = Article::where('slug', 'LIKE', "{$slug}%")->count();
        $finalSlug = $count ? "{$slug}-" . ($count + 1) : $slug;

        Article::create([
            'title' => $request->title,
            'slug' => $finalSlug,
            'alt_text' => $request->alt_text,
            'meta_description' => $request->meta_description,
            'schema' => $request->schema, // <-- Tambahkan ini
            'content' => $request->content,
            'thumbnail' => $thumbnailPath,
            'status' => $request->status,
            'views' => 0,
            'published_at' => $request->published_at ?? now(),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255|unique:articles,title,' . $id,
            'slug' => 'nullable|string|max:255',
            'alt_text' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:160',
            'schema' => 'nullable|string', // <-- Tambahkan validasi
            'status' => 'required|in:draft,published',
            'published_at' => 'required|date',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Cek jika title atau custom slug berubah
        $slugBase = $request->slug ? $request->slug : $request->title;
        $slug = Str::slug($slugBase);
        
        if ($article->slug !== $slug) {
            $count = Article::where('slug', 'LIKE', "{$slug}%")
                            ->where('id', '!=', $id)
                            ->count();
            $article->slug = $count ? "{$slug}-" . ($count + 1) : $slug;
        }

        $article->title = $request->title;
        $article->alt_text = $request->alt_text;
        $article->meta_description = $request->meta_description;
        $article->schema = $request->schema; // <-- Tambahkan ini
        $article->content = $request->content;
        $article->status = $request->status;
        $article->published_at = $request->published_at;

        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
            $article->thumbnail = $path;
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function uploadEditorImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $file = $request->file('upload');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('articles', $filename, 'public');

                return response()->json([
                    'uploaded' => 1,
                    'fileName' => $filename,
                    'url' => asset('storage/' . $path)
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'uploaded' => 0,
                    'error' => ['message' => 'Gagal upload: ' . $e->getMessage()]
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}