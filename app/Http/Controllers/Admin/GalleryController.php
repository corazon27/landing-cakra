<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/galleries', $filename);
            $gambarPath = $filename;
        }

        Gallery::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Galeri foto berhasil ditambahkan!');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $gambarPath = $gallery->gambar;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambarPath && Storage::exists('public/galleries/' . $gambarPath)) {
                Storage::delete('public/galleries/' . $gambarPath);
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/galleries', $filename);
            $gambarPath = $filename;
        }

        $gallery->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Galeri foto berhasil diperbarui!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->gambar && Storage::exists('public/galleries/' . $gallery->gambar)) {
            Storage::delete('public/galleries/' . $gallery->gambar);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Galeri foto berhasil dihapus!');
    }
}