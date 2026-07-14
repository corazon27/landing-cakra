import './bootstrap';

// ============================================================
// Alpine.js — di-bundle via Vite (bukan lagi dari CDN).
// PENTING: baris <script src="...alpinejs.../cdn.min.js"> di
// app.blade.php WAJIB dihapus, karena versi CDN auto-start
// sendiri — kalau dibiarkan, Alpine akan ke-load & start 2x.
// ============================================================
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// ============================================================
// Swiper — hanya import modul yang benar-benar dipakai carousel
// testimonial (Navigation, Pagination, Autoplay). Modul lain
// (Zoom, Thumbs, EffectFade, dll dari bundle penuh) tidak ikut
// di-bundle, ini yang menghemat ~41 KiB.
// CSS Swiper di-import di sini juga, otomatis masuk ke app.css
// hasil build Vite — baris CDN Swiper CSS/JS di app.blade.php
// WAJIB dihapus juga.
// ============================================================
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };

// ============================================================
// Reveal-on-scroll sederhana untuk section (menghormati preferensi
// reduced-motion user)
// ============================================================
if (window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {
    document.querySelectorAll('section').forEach((el) => el.classList.add('reveal'));

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach((el) => io.observe(el));
}