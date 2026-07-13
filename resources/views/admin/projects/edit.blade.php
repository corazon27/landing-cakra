@extends('components.layout.admin')
@section('title', 'Edit data Proyek')

@section('header', 'Manajemen Proyek & Dealing')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-[32px] shadow-sm border border-slate-200 p-8">
        <h3 class="text-xl font-bold text-slate-800 mb-6">Update Status Proyek</h3>

        @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-600 rounded-2xl">
            <p class="font-bold mb-2">Ups! Ada yang salah:</p>
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Pilih Status (Point Penting) -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Update Status Pengerjaan</label>
                <select name="status"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                    <option value="pending" {{ $project->status == 'pending' ? 'selected' : '' }}>Menunggu DP</option>
                    <option value="development" {{ $project->status == 'development' ? 'selected' : '' }}>Proses
                        Development (Coding)</option>
                    <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Selesai & Komisi
                        Cair</option>
                </select>
            </div>

            <!-- Field lainnya tetap sama seperti Create, namun dengan value dari $project -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Klien -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Klien</label>
                    <input type="text" name="client_name" value="{{ $project->client_name }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50">
                </div>

                <!-- Tambahkan ini: Jenis Proyek -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Jenis Proyek</label>
                    <input type="text" name="project_name" value="{{ $project->project_name }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200">
                </div>

                <!-- Total Harga -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Total Harga (Rp)</label>
                    <input type="number" name="total_price" value="{{ (int)$project->total_price }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200">
                </div>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-4 rounded-2xl font-bold shadow-lg shadow-blue-200">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection