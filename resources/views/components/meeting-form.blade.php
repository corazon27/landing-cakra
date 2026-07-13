<!-- resources/views/components/meeting-form.blade.php -->
<section class="py-20 bg-blue-600 rounded-t-[3rem] text-white" aria-labelledby="meeting-form-heading">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4" id="meeting-form-heading">{{ $title }}</h2>
        <p class="text-blue-100 mb-10 text-lg">{{ $subtitle }}</p>

        <div class="bg-white p-6 md:p-8 rounded-3xl shadow-2xl text-slate-900 text-left">
            <div id="meetingForm">

                {{--
                    FIX MOBILE:
                    Sebelumnya: grid-cols-1 md:grid-cols-2 dengan col-span-1 untuk company & phone.
                    Masalah: di mobile (grid-cols-1) kedua field stack dengan benar,
                    tapi label dan input company tidak mendapat lebar penuh karena
                    col-span tidak dideklarasikan eksplisit untuk xs.

                    Solusi: pisahkan grid menjadi 2 baris:
                    - Baris 1: company + phone → pakai grid md:grid-cols-2 gap-6
                    - Baris 2: date, needs, button → col-span-full otomatis (1 kolom)
                    Ini memastikan mobile = 1 kolom penuh, desktop = 2 kolom berdampingan,
                    tanpa mengubah visual desktop sama sekali.
                --}}

                {{-- Baris 1: Nama Perusahaan + Nomor WhatsApp — 2 kolom di desktop, stack di mobile --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                    <div class="w-full">
                        <label for="company" class="block text-sm font-bold mb-2">
                            Nama Perusahaan <span class="text-red-500" aria-label="wajib diisi">*</span>
                        </label>
                        <input type="text" id="company" name="company" placeholder="Contoh: PT. Maju Jaya"
                            autocomplete="organization" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                    </div>

                    <div class="w-full">
                        <label for="phone" class="block text-sm font-bold mb-2">
                            Nomor WhatsApp PIC <span class="text-red-500" aria-label="wajib diisi">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" placeholder="0812xxxx" autocomplete="tel" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                    </div>

                </div>

                {{-- Baris 2: Tanggal Meeting — full width di semua ukuran --}}
                <div class="mb-6">
                    <label for="meetingDate" class="block text-sm font-bold mb-2">
                        Rencana Tanggal Meeting <span class="text-red-500" aria-label="wajib diisi">*</span>
                    </label>
                    <input type="date" id="meetingDate" name="meetingDate" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm text-slate-500">
                </div>

                {{-- Baris 3: Deskripsi Kebutuhan — full width di semua ukuran --}}
                <div class="mb-6">
                    <label for="needs" class="block text-sm font-bold mb-2">Deskripsi Kebutuhan (Opsional)</label>
                    <textarea id="needs" name="needs" rows="3"
                        placeholder="Ceritakan singkat kebutuhan website yang ingin Anda buat..."
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm resize-none"></textarea>
                </div>

                {{-- Baris 4: Tombol Submit — full width di semua ukuran --}}
                <div>
                    <button type="button" onclick="handleMeetingForm()"
                        class="w-full py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-xl transition-all shadow-lg shadow-emerald-200 flex items-center justify-center gap-2 cursor-pointer">
                        <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                        Kirim Permintaan Meeting
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
function handleMeetingForm() {
    const company = document.getElementById('company').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const date = document.getElementById('meetingDate').value;
    const needs = document.getElementById('needs').value.trim() || 'Tidak ada deskripsi';

    if (!company || !phone || !date) {
        alert('Mohon lengkapi field yang wajib diisi.');
        return;
    }

    const number = '6285865405330';
    const message = 'Halo Admin, saya ingin *Minta Meeting*:%0A%0A' +
        '*Nama Perusahaan:* ' + encodeURIComponent(company) + '%0A' +
        '*No. WhatsApp PIC:* ' + encodeURIComponent(phone) + '%0A' +
        '*Rencana Tanggal:* ' + encodeURIComponent(date) + '%0A' +
        '*Deskripsi Kebutuhan:* ' + encodeURIComponent(needs);

    window.open('https://wa.me/' + number + '?text=' + message, '_blank');
}
</script>