<?php

namespace App\Services;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Exception;

class ImageConversionService
{
    public function __construct()
    {
        // ImageManager sudah siap digunakan via facade
    }

    /**
     * Konversi file image ke format WebP dan simpan
     * 
     * @param UploadedFile $file File yang akan dikonversi
     * @param string $directory Direktori penyimpanan (tanpa leading slash)
     * @param int $quality Kualitas kompresi (0-100), default 80
     * @return string Path file yang sudah disimpan
     * @throws Exception
     */
    public function convertToWebP(UploadedFile $file, string $directory = 'images', int $quality = 80): string
    {
        try {
            // Validasi quality
            $quality = max(1, min(100, $quality));

            // Baca file image menggunakan path yang tepat
            $filePath = $file->getRealPath();
            if (!file_exists($filePath)) {
                throw new Exception('File tidak ditemukan di: ' . $filePath);
            }

            $image = Image::make($filePath);

            // Generate nama file baru dengan ekstensi .webp
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // Sanitize nama file
            $originalName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $originalName);
            $filename = time() . '_' . $originalName . '.webp';

            // Konversi ke format WebP dengan quality yang ditentukan
            $image->encode('webp', $quality);

            // Buat direktori jika belum ada
            $path = $directory . '/' . $filename;
            Storage::disk('public')->put($path, (string)$image);

            \Log::info('Image converted to WebP', [
                'original' => $file->getClientOriginalName(),
                'path' => $path,
                'quality' => $quality,
            ]);

            return $path;
        } catch (Exception $e) {
            \Log::error('Image conversion error', [
                'file' => $file->getClientOriginalName(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            throw new Exception('Gagal mengkonversi gambar: ' . $e->getMessage());
        }
    }

    /**
     * Konversi file image dari path dan simpan
     * 
     * @param string $sourcePath Path file sumber
     * @param string $directory Direktori penyimpanan (tanpa leading slash)
     * @param int $quality Kualitas kompresi (0-100), default 80
     * @return string Path file yang sudah disimpan
     * @throws Exception
     */
    public function convertPathToWebP(string $sourcePath, string $directory = 'images', int $quality = 80): string
    {
        try {
            // Baca file dari storage
            $imageContent = Storage::disk('public')->get($sourcePath);
            $image = Image::make($imageContent);

            // Generate nama file baru dengan ekstensi .webp
            $filename = pathinfo($sourcePath, PATHINFO_FILENAME);
            $filename = time() . '_' . $filename . '.webp';

            // Konversi ke format WebP dengan quality yang ditentukan
            $image->encode('webp', $quality);

            // Simpan ke storage
            $path = $directory . '/' . $filename;
            Storage::disk('public')->put($path, (string)$image);

            // Hapus file original
            if (Storage::disk('public')->exists($sourcePath)) {
                Storage::disk('public')->delete($sourcePath);
            }

            return $path;
        } catch (Exception $e) {
            throw new Exception('Gagal mengkonversi gambar: ' . $e->getMessage());
        }
    }
}
