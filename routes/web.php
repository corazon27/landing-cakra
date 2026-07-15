<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\frontArtikelController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;

// rute admin
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ArticleController as AdminArticle;
use App\Http\Controllers\Admin\CashFlowController as AdminCashFlow;
use App\Http\Controllers\Admin\ProjectController as AdminProject;
use App\Http\Controllers\Admin\AffiliateAdminController as AdminAffiliate;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
// rute affiliate
use App\Http\Controllers\Affiliate\RegisterController;
use App\Http\Controllers\Affiliate\ForgotPasswordController;
use App\Http\Controllers\Affiliate\LoginController;
use App\Http\Controllers\Affiliate\DashboardController;
use App\Http\Controllers\Affiliate\SettingsController;

// rute komentar
use App\Http\Controllers\CommentController;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// --- GUEST ROUTES (PUBLIC) ---
 Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/tentang', function () { return view('about'); })->name('about');
Route::get('/layanan', function () { return view('services'); })->name('services');
Route::get('/hubungi-kami', function () { return view('kontak'); })->name('kontak');
Route::get('/fitur-web-kasir', function () { return view('fitur.fitur-kasir'); })->name('fitur.fitur-kasir');
Route::get('/fitur-web-erp', function () { return view('fitur.fitur-erp'); })->name('fitur.fitur-erp');
Route::get('/fitur-web-ecommerce', function () { return view('fitur.fitur-ecommerce'); })->name('fitur.fitur-ecommerce');
Route::get('/fitur-web-booking', function () { return view('fitur.fitur-booking'); })->name('fitur.fitur-booking');
Route::get('/fitur-web-katalog-produk', function () { return view('fitur.fitur-katalog'); })->name('fitur.fitur-katalog');
Route::get('/fitur-company-profile', function () { return view('fitur.fitur-company-profile'); })->name('fitur.fitur-company-profile');
Route::get('/fitur-web-landing-page', function () { return view('fitur.fitur-landing-page'); })->name('fitur.fitur-landing-page');

Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/web-company-profile', function () { return view('layanan.web-company-profile'); })->name('company-profile');
    Route::get('/web-kasir', function () { return view('layanan.web-kasir'); })->name('kasir');
    Route::get('/web-katalog-produk', function () { return view('layanan.web-katalog-produk'); })->name('katalog-produk');
    Route::get('/web-booking', function () { return view('layanan.web-booking'); })->name('booking');
    Route::get('/web-ecommerce', function () { return view('layanan.web-ecommerce'); })->name('ecommerce');
    Route::get('/web-erp', function () { return view('layanan.web-erp'); })->name('erp');
    Route::get('/web-landing-page', function () { return view('layanan.web-landing-page'); })->name('landing-page');
});

Route::get('/affiliate', function () { return view('affiliate'); })->name('affiliate');
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{slug}', [PortfolioController::class, 'show'])->name('portofolio.show');
Route::get('/tanya-jawab', function () { return view('faq'); })->name('faq');

// --- AFFILIATE AUTH (GUEST ONLY) ---
Route::middleware('guest:affiliate')->group(function () {
    Route::get('/affiliate/register', function () { return view('affiliate.register'); })->name('affiliate.register');
    Route::post('/affiliate/register', [RegisterController::class, 'store'])->name('affiliate.register.store');
    Route::get('/affiliate/login', function() { 
        return view('affiliate.login'); 
    })->name('affiliate.login'); 
    
    Route::post('/affiliate/login', [LoginController::class, 'login'])->name('affiliate.login.post');
    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Jalur Eksekusi Pembuatan Password Baru
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
});

// --- 1. EMAIL VERIFICATION ROUTES ---
// SANGAT PENTING: Jangan beri prefix name 'affiliate.' di sini agar Laravel mengenali 'verification.notice'
Route::middleware('auth:affiliate')->group(function () {
    
    Route::get('/email/verify', function () {
        return view('affiliate.verify-email'); 
    })->name('verification.notice'); // Link tujuan otomatis jika user belum verified

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('affiliate.dashboard')->with('success', 'Email berhasil diverifikasi!');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Link verifikasi baru telah dikirim!');
    })->middleware('throttle:6,1')->name('verification.send');

    // Route Logout (Bisa dipanggil via route('logout'))
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// --- 2. AFFILIATE DASHBOARD AREA (DENGAN PREFIX & MIDDLEWARE VERIFIED) ---
Route::prefix('affiliate')->name('affiliate.')->group(function () {
    
    Route::middleware(['auth:affiliate', 'verified'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/riwayat', [DashboardController::class, 'riwayat'])->name('riwayat');
        Route::get('/withdraw', [DashboardController::class, 'withdrawPage'])->name('withdraw');
        Route::post('/withdraw', [DashboardController::class, 'processWithdraw'])->name('withdraw-store');
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
    });

    // Alias logout agar route('affiliate.logout') juga bekerja jika kamu menggunakannya di sidebar
    Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:affiliate')->name('logout');
});

// Rute Admin (Kendali Pusat)
Route::get('/kendali-pusat', [AdminLogin::class, 'showLoginForm'])->name('admin.login');
Route::post('/kendali-pusat', [AdminLogin::class, 'login']);

Route::middleware(['auth:admin'])->prefix('management-center')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    Route::resource('cashflow', AdminCashFlow::class)->names([
        'index' => 'admin.cashflow.index',
        'create' => 'admin.cashflow.create',
        'store' => 'admin.cashflow.store'
    ]);

    // Rute Khusus untuk Upload Image CKEditor (karena tidak ada di resource standar)
    Route::post('/artikel/upload', [AdminArticle::class, 'uploadEditorImage'])->name('admin.articles.upload');
    
    Route::resource('articles', AdminArticle::class)->names([
        'index'   => 'admin.articles.index',
        'create'  => 'admin.articles.create',
        'store'   => 'admin.articles.store',
        'edit'    => 'admin.articles.edit',
        'update'  => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ])->parameters([
        'articles' => 'id'
    ]);

    Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments.index');
    Route::patch('/comments/{id}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('admin.comments.destroy');
    // Route untuk menampilkan halaman (Ini yang menyebabkan 404 jika belum ada)
    Route::get('/admin/comments/{id}/reply', [CommentController::class, 'reply'])->name('admin.comments.reply');
    Route::post('/admin/comments/{id}/reply', [CommentController::class, 'storeReply'])->name('admin.comments.storeReply');
    //data affiliator
    Route::resource('affiliates', AdminAffiliate::class )->names([
        'index' => 'admin.affiliates.index',
        'create' => 'admin.affiliates.create',
        'store' => 'admin.affiliates.store',
        'show' => 'admin.affiliates.show',
        'destroy' => 'admin.affiliates.destroy',
    ])->parameters([
        'affiliates' => 'id'
    ]);
    
    // Route untuk proyek yang sudah oke tadi
    Route::resource('projects', AdminProject::class)->names([
        'index' => 'admin.projects.index',
        'create' => 'admin.projects.create',
        'store' => 'admin.projects.store',
        'edit' => 'admin.projects.edit',
        'update' => 'admin.projects.update',
        'destroy' => 'admin.projects.destroy',
    ])->parameters([
        'projects' => 'id'
    ]);

    Route::resource('portfolio', AdminPortfolioController::class)->names([
        'index' => 'admin.portfolio.index',
        'create' => 'admin.portfolio.create',
        'store' => 'admin.portfolio.store',
        'edit' => 'admin.portfolio.edit',
        'update' => 'admin.portfolio.update',
        'destroy' => 'admin.portfolio.destroy',
    ])->parameters([
        'portfolio' => 'id'
    ]);

    Route::get('withdrawals', [AdminAffiliate::class, 'indexWithdrawals'])->name('admin.withdrawals.index');
    Route::post('withdrawals/{id}/approve', [AdminAffiliate::class, 'approve'])->name('admin.withdrawals.approve');
    Route::post('withdrawals/{id}/reject', [AdminAffiliate::class, 'reject'])->name('admin.withdrawals.reject');
    Route::post('/logout', [AdminLogin::class, 'logout'])->name('admin.logout');
});

Route::get('/artikel', [frontArtikelController::class, 'index'])->name('front.artikel.index');
Route::get('/artikel/{slug}', [frontArtikelController::class, 'show'])->name('front.artikel.detail');

Route::post('/articles/{id}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/bersih-cache-cakra', function() {
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return "Cache View Berhasil Dibersihkan!";
});

Route::get('/perbaiki-gambar-cakra', function () {
    // 1. Antisipasi jika dokumen root mengarah ke folder public
    $publicStorage = public_path('storage');
    if (!file_exists($publicStorage)) {
        @symlink(base_path('storage/app/public'), $publicStorage);
    }

    // 2. Antisipasi jika dokumen root langsung di public_html
    // Kita buat shortcut folder di dalam folder storage fisik agar langsung mengarah ke folder app/public
    $folders = ['thumbnails', 'articles', 'portofolio', 'profile-photos'];
    foreach ($folders as $folder) {
        $target = base_path("storage/app/public/{$folder}");
        $shortcut = base_path("storage/{$folder}");
        
        if (file_exists(base_path('storage')) && !file_exists($shortcut)) {
            @symlink($target, $shortcut);
        }
    }
    
    return 'Selesai! Jalur gambar berhasil dihubungkan dengan aman tanpa menghapus data.';
});

