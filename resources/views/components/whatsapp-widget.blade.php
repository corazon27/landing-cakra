@php
// Data kontak bisa dipindah ke Controller atau Config jika nanti datanya dinamis
$contacts = [
['name' => 'Sakti', 'role' => 'Sales', 'phone' => '6282136405273', 'bg' => '0D8ABC'],
['name' => 'Iqbal', 'role' => 'Sales', 'phone' => '6282136405273', 'bg' => 'E91E63'],
['name' => 'Alfian', 'role' => 'Sales', 'phone' => '6282136405273', 'bg' => 'FF9800'],
];
@endphp

<div x-data="{ open: false }" class="fixed bottom-8 right-6 z-[9999] flex flex-col items-end">

    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90 translate-y-10"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-90 translate-y-10"
        class="mb-6 w-[350px] bg-white rounded-[20px] shadow-[0_10px_50px_rgba(0,0,0,0.1)] overflow-hidden border border-slate-100"
        style="display: none;" x-cloak>
        <div class="bg-[#25D366] p-6 text-white relative">
            <div class="flex items-center gap-4">
                <i class="fab fa-whatsapp text-4xl"></i>
                <div>
                    <h4 class="font-bold text-xl leading-tight">Halo</h4>
                    <p class="text-xs opacity-80 mt-1">The team typically replies in a few minutes.</p>
                </div>
            </div>
        </div>

        <div class="p-4 space-y-3 bg-white">
            @foreach($contacts as $contact)
            <a href="https://wa.me/{{ $contact['phone'] }}" target="_blank"
                class="flex items-center justify-between p-4 bg-[#f8f9fa] rounded-xl hover:bg-slate-100 transition-all border-l-4 border-l-[#25D366] group">
                <div class="flex items-center gap-4">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($contact['name']) }}&background={{ $contact['bg'] }}&color=fff"
                        class="w-12 h-12 rounded-full shadow-sm" alt="{{ $contact['name'] }}">
                    <div>
                        <p class="font-bold text-slate-800">{{ $contact['name'] }}</p>
                        <p class="text-xs text-slate-500">{{ $contact['role'] }}</p>
                    </div>
                </div>
                <i class="fab fa-whatsapp text-[#25D366] text-xl"></i>
            </a>
            @endforeach
        </div>
    </div>

    <button @click="open = !open" aria-label="Toggle WhatsApp Chat"
        class="w-14 h-14 bg-[#25D366] text-white rounded-full shadow-2xl flex items-center justify-center transition-all duration-500 hover:scale-110 active:scale-95 cursor-pointer">
        <div class="relative w-8 h-8 flex items-center justify-center">
            <i class="fab fa-whatsapp text-3xl absolute transition-all duration-500 transform"
                :class="open ? 'opacity-0 rotate-180 scale-50' : 'opacity-100 rotate-0 scale-100'"></i>
            <i class="fas fa-times text-3xl absolute transition-all duration-500 transform"
                :class="open ? 'opacity-100 rotate-0 scale-100' : 'opacity-0 -rotate-180 scale-50'"></i>
        </div>
    </button>
</div>