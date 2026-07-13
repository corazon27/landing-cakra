@extends('components.layout.admin')

@section('title', 'Data Penarikan Komisi Affiliator')

@section('header', 'Data Penarikan Komisi Affiliator')

@section('content')
<table class="w-full">
    <thead>
        <tr class="text-left bg-slate-50">
            <th class="p-4">Affiliator</th>
            <th class="p-4">Rekening Tujuan</th>
            <th class="p-4">Nominal</th>
            <th class="p-4">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($withdrawals as $wd)
        <tr class="border-b">
            <td class="p-4">
                <p class="font-bold">{{ $wd->affiliateUser->name }}</p>
                <p class="text-xs text-slate-500">{{ $wd->created_at->format('d M Y H:i') }}</p>
            </td>
            <td class="p-4">
                <p class="text-sm font-bold text-blue-600">{{ $wd->bank_name }}</p>
                <p class="text-sm font-mono">{{ $wd->account_number }}</p>
                <p class="text-xs italic">a.n {{ $wd->account_name }}</p>
            </td>
            <td class="p-4 font-bold text-slate-900">
                Rp {{ number_format($wd->amount, 0, ',', '.') }}
            </td>
            <td class="p-4 flex gap-2">
                @if($wd->status == 'pending')
                <form action="{{ route('admin.withdrawals.approve', $wd->id) }}" method="POST">
                    @csrf
                    <button class="px-4 py-2 bg-emerald-500 text-white rounded-lg text-xs font-bold">Approve</button>
                </form>
                <button onclick="showRejectModal({{ $wd->id }})"
                    class="px-4 py-2 bg-red-500 text-white rounded-lg text-xs font-bold">Reject</button>
                @else
                <span
                    class="px-3 py-1 rounded-full text-[10px] font-bold uppercase {{ $wd->status == 'success' ? 'bg-emerald-100 text-emerald-600' : 'bg-red-100 text-red-600' }}">
                    {{ $wd->status }}
                </span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection