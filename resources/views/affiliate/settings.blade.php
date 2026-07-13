<x-layout.dashboard>
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Pengaturan Akun</h1>
            <p class="text-slate-500">Kelola informasi profil dan keamanan akun kamu.</p>
        </div>

        @if(session('success'))
        <div
            class="mb-6 p-4 bg-emerald-50 text-emerald-600 rounded-xl border border-emerald-100 flex items-center gap-3">
            <i class="fa-solid fa-circle-check"></i>
            <span class="text-sm font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <form action="{{ route('affiliate.settings.update') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-6">Informasi Profil</h2>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex flex-col items-center gap-4" x-data="{ photoPreview: null }">

                        <template x-if="! photoPreview">
                            <img src="{{ $user->profile_photo ? asset('storage/'.$user->profile_photo) : 'https://ui-avatars.com/api/?name='.$user->name }}"
                                class="w-32 h-32 rounded-2xl object-cover border-4 border-slate-50 shadow-sm">
                        </template>

                        <template x-if="photoPreview">
                            <img :src="photoPreview"
                                class="w-32 h-32 rounded-2xl object-cover border-4 border-blue-100 shadow-md">
                        </template>

                        <label
                            class="cursor-pointer bg-slate-100 px-4 py-2 rounded-lg text-xs font-bold hover:bg-slate-200 transition">
                            Ganti Foto
                            <input type="file" name="profile_photo" class="hidden" @change="
                    const file = $event.target.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = (e) => { photoPreview = e.target.result; };
                    reader.readAsDataURL(file);
               ">
                        </label>

                        @error('profile_photo')
                        <span class="text-red-500 text-[10px] font-bold uppercase tracking-tight">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ $user->name }}"
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500">Nomor WhatsApp</label>
                            <input type="text" name="whatsapp" value="{{ $user->whatsapp }}"
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-6">Informasi Rekening Bank</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500">Nama Bank</label>
                        <input type="text" name="bank_name" value="{{ $user->bank_name }}"
                            placeholder="BCA / Mandiri / BRI"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500">Nomor Rekening</label>
                        <input type="text" name="account_number" value="{{ $user->account_number }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500">Atas Nama</label>
                        <input type="text" name="account_holder_name" value="{{ $user->account_holder_name }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-6">Ganti Password</h2>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500">Password Saat Ini</label>
                        <input type="password" name="current_password"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                        @error('current_password') <span class="text-red-500 text-[10px]">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500">Password Baru</label>
                            <input type="password" name="new_password"
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500">Konfirmasi Password Baru</label>
                            <input type="password" name="new_password_confirmation"
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-100 cursor-pointer group">
                Simpan Perubahan
            </button>
        </form>
    </div>
</x-layout.dashboard>