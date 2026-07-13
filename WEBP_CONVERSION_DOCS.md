# Fitur Auto Konversi ke WebP - Dokumentasi

## Ringkasan

Fitur ini secara otomatis mengkonversi semua gambar yang diunggah (baik saat membuat maupun mengedit artikel) ke format **WebP**, yang memberikan ukuran file lebih kecil namun kualitas visual yang tetap baik.

## File yang Dimodifikasi

### 1. **ImageConversionService** (Baru)

**Path**: `app/Services/ImageConversionService.php`

Service ini bertugas melakukan konversi gambar ke format WebP. Terdapat dua method utama:

- **`convertToWebP(UploadedFile $file, string $directory, int $quality)`**
    - Menerima file yang baru diunggah
    - Mengkonversi ke WebP dengan kualitas yang dapat disesuaikan (default: 80)
    - Mengembalikan path file yang sudah disimpan

- **`convertPathToWebP(string $sourcePath, string $directory, int $quality)`**
    - Mengkonversi file yang sudah ada di storage
    - Menghapus file asli setelah konversi berhasil

### 2. **ArticleController** (Dimodifikasi)

**Path**: `app/Http/Controllers/Admin/ArticleController.php`

#### Perubahan:

- **Dependency Injection**: Menambahkan `ImageConversionService` via constructor
- **`store()` method**: Gambar thumbnail dikonversi ke WebP sebelum disimpan
- **`update()` method**: Gambar thumbnail baru dikonversi ke WebP dan file lama dihapus
- **`uploadEditorImage()` method**: Gambar dari CKEditor juga dikonversi ke WebP

## Keuntungan

✅ **Ukuran File Lebih Kecil** - Format WebP menghasilkan ukuran file 25-35% lebih kecil dibanding JPEG/PNG  
✅ **Performa Lebih Baik** - Waktu loading halaman lebih cepat  
✅ **Kualitas Terjaga** - Dengan quality 80, gambar tetap terlihat bagus  
✅ **Otomatis** - Tidak perlu input dari user, konversi dilakukan secara otomatis  
✅ **Hemat Storage** - Mengurangi penggunaan disk space di server

## Penggunaan

Tidak ada perubahan pada UI atau cara user mengunggah gambar. Proses konversi dilakukan secara otomatis di backend:

1. **Saat Membuat Artikel**: Upload gambar thumbnail → Otomatis dikonversi ke WebP
2. **Saat Mengedit Artikel**: Upload gambar thumbnail baru → Otomatis dikonversi ke WebP, gambar lama dihapus
3. **Upload via CKEditor**: Upload gambar di content editor → Otomatis dikonversi ke WebP

## Konfigurasi Kualitas

Jika ingin mengubah kualitas konversi, ubah parameter `quality` di `convertToWebP()`:

```php
// Nilai lebih rendah = file lebih kecil tapi kualitas berkurang
// Nilai lebih tinggi = file lebih besar tapi kualitas lebih baik

// Saat ini menggunakan 80 (rekomendasi)
$this->imageConversionService->convertToWebP($file, 'thumbnails', 80);

// Bisa diubah menjadi:
// 70 = quality lebih rendah, file lebih kecil
// 90 = quality lebih tinggi, file lebih besar
```

## Kompatibilitas Browser

WebP didukung oleh semua browser modern:

- Chrome 23+
- Firefox 65+
- Safari 16+
- Edge 18+

Browser lama bisa menggunakan polyfill atau fallback ke format lain jika diperlukan.

## Persyaratan

- PHP 8.1+
- Intervention Image v3.11 (sudah terinstall di project)
- GD Library (biasanya sudah ter-install di server)

## Error Handling

Jika terjadi error saat konversi:

- **Saat upload thumbnail**: Error ditampilkan dan redirect kembali ke form
- **Saat upload CKEditor**: Response JSON dengan pesan error yang detail

Contoh error response:

```json
{
    "uploaded": 0,
    "error": {
        "message": "Gagal mengkonversi gambar: [detail error]"
    }
}
```
