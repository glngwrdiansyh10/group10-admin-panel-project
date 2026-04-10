```blade
@extends('layouts.app')

@section('title', 'Settings')
@section('page-title', 'Pengaturan')
@section('page-subtitle', 'Kelola profil dan preferensi akun kamu')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Kolom Kiri: Profil Card --}}
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl border border-border shadow-sm p-6 text-center">
            <div class="relative w-24 h-24 mx-auto mb-4">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-primary-400 to-primary-600
                             flex items-center justify-center text-white text-3xl font-bold shadow-lg">G</div>
                <button class="absolute bottom-0 right-0 w-8 h-8 bg-primary-500 rounded-full
                               flex items-center justify-center text-white shadow-md
                               hover:bg-primary-600 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86
                              a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5
                              a2 2 0 01-2-2V9z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </button>
            </div>
            <h3 class="font-semibold text-slate-800 text-lg">Gilang Wardiansyah</h3>
            <p class="text-sm text-slate-400 mt-1">gilang@group10.com</p>
            <span class="inline-block mt-2 px-3 py-1 bg-primary-50 text-primary-600
                         text-xs font-medium rounded-full">Administrator</span>
            <div class="mt-6 pt-5 border-t border-border space-y-3 text-left">
                @foreach([
                    ['label'=>'Bergabung','value'=>'01 Januari 2024'],
                    ['label'=>'Terakhir Login','value'=>'Hari ini, 09.00'],
                    ['label'=>'Status','value'=>'Aktif'],
                ] as $info)
                <div class="flex justify-between text-xs">
                    <span class="text-slate-400">{{ $info['label'] }}</span>
                    <span class="text-slate-700 font-medium">{{ $info['value'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Kolom Kanan: Form --}}
    <div class="lg:col-span-2 space-y-6">

        {{-- Alert sukses --}}
        <div id="success-alert"
             class="hidden flex items-center gap-3 bg-green-50 border border-green-200
                    text-green-700 rounded-2xl px-5 py-3 text-sm font-medium">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>Pengaturan berhasil disimpan!
        </div>

        {{-- Form Profil --}}
        <div class="bg-white rounded-2xl border border-border shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-border bg-slate-50">
                <h2 class="font-semibold text-slate-800">Informasi Profil</h2>
                <p class="text-xs text-slate-400 mt-0.5">Perbarui data profil akun kamu</p>
            </div>
            <div class="p-6 space-y-4">
                @foreach([
                    ['label'=>'Nama Lengkap','type'=>'text', 'val'=>'Gilang Wardiansyah','ro'=>false],
                    ['label'=>'Email',        'type'=>'email','val'=>'gilang@group10.com','ro'=>false],
                    ['label'=>'Role',         'type'=>'text', 'val'=>'Administrator',     'ro'=>true],
                ] as $f)
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ $f['label'] }}</label>
                    <input type="{{ $f['type'] }}" value="{{ $f['val'] }}"
                           {{ $f['ro'] ? 'readonly' : '' }}
                           class="w-full px-4 py-2.5 text-sm border border-border rounded-xl
                                  focus:outline-none focus:ring-2 focus:ring-primary-300
                                  focus:border-primary-400 transition-all duration-200
                                  {{ $f['ro'] ? 'bg-slate-100 text-slate-400 cursor-not-allowed'
                                  : 'bg-slate-50 text-slate-700 focus:bg-white' }}">
                    @if($f['ro'])
                    <p class="text-xs text-slate-400 mt-1">Role hanya dapat diubah oleh superadmin.</p>
                    @endif
                </div>
                @endforeach
                <div class="flex justify-end pt-1">
                    <button id="save-profile"
                            class="px-5 py-2 bg-primary-500 text-white text-sm font-medium
                                   rounded-xl hover:bg-primary-600 active:scale-95
                                   transition-all duration-200 shadow-sm">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        {{-- Form Password --}}
        <div class="bg-white rounded-2xl border border-border shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-border bg-slate-50">
                <h2 class="font-semibold text-slate-800">Ubah Password</h2>
                <p class="text-xs text-slate-400 mt-0.5">Pastikan password baru kuat dan aman</p>
            </div>
            <div class="p-6 space-y-4">
                @foreach([
                    ['id'=>'pass-current','label'=>'Password Saat Ini'],
                    ['id'=>'pass-new',    'label'=>'Password Baru'],
                    ['id'=>'pass-confirm','label'=>'Konfirmasi Password Baru'],
                ] as $f)
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ $f['label'] }}</label>
                    <input type="password" id="{{ $f['id'] }}" placeholder="••••••••"
                           class="w-full px-4 py-2.5 text-sm bg-slate-50 border border-border
                                  rounded-xl text-slate-700 focus:outline-none focus:ring-2
                                  focus:ring-primary-300 focus:bg-white transition-all duration-200">
                </div>
                @endforeach
                <div class="flex justify-end pt-1">
                    <button class="px-5 py-2 bg-slate-800 text-white text-sm font-medium
                                   rounded-xl hover:bg-slate-700 active:scale-95
                                   transition-all duration-200 shadow-sm">Update Password</button>
                </div>
            </div>
        </div>

        {{-- Preferensi --}}
        <div class="bg-white rounded-2xl border border-border shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-border bg-slate-50">
                <h2 class="font-semibold text-slate-800">Preferensi</h2>
                <p class="text-xs text-slate-400 mt-0.5">Sesuaikan pengalaman penggunaan kamu</p>
            </div>
            <div class="p-6 divide-y divide-border">
                @foreach([
                    ['label'=>'Notifikasi Email', 'desc'=>'Terima notifikasi via email', 'id'=>'t-email', 'on'=>true],
                    ['label'=>'Notifikasi Push',  'desc'=>'Notifikasi di browser',       'id'=>'t-push',  'on'=>false],
                    ['label'=>'Laporan Mingguan', 'desc'=>'Ringkasan setiap Senin',      'id'=>'t-report','on'=>true],
                ] as $p)
                <div class="flex items-center justify-between py-4 first:pt-0 last:pb-0">
                    <div>
                        <p class="text-sm font-medium text-slate-700">{{ $p['label'] }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $p['desc'] }}</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" id="{{ $p['id'] }}" class="sr-only peer" {{ $p['on']?'checked':'' }}>
                        <div class="w-11 h-6 bg-slate-200 rounded-full peer peer-checked:bg-primary-500
                                    transition-colors duration-200 after:content-[''] after:absolute
                                    after:top-0.5 after:left-0.5 after:bg-white after:rounded-full
                                    after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-5
                                    after:shadow-sm"></div>
                    </label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
    document.getElementById('save-profile').addEventListener('click',()=>{
        const a=document.getElementById('success-alert');
        a.classList.remove('hidden');
        setTimeout(()=>a.classList.add('hidden'),3000);
    });
</script>
@endpush
```