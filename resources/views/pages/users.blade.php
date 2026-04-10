
```blade
@extends('layouts.app')

@section('title', 'Users')
@section('page-title', 'Manajemen Pengguna')
@section('page-subtitle', 'Kelola data pengguna sistem')

@section('content')

@php
$users = [
    ['id'=> 1, 'name'=> 'Gilang Wardiansyah', 'email'=> 'gilang@group10.com',  'role'=> 'Administrator', 'status'=> 'active'],
    ['id'=> 2, 'name'=> 'Nazwa Anggota',       'email'=> 'nazwa@group10.com',   'role'=> 'Editor',        'status'=> 'active'],
    ['id'=> 3, 'name'=> 'Ali Nurrohmat',       'email'=> 'ali@group10.com',     'role'=> 'Editor',        'status'=> 'active'],
    ['id'=> 4, 'name'=> 'Rizky Firmansyah',    'email'=> 'rizky@example.com',   'role'=> 'Viewer',        'status'=> 'active'],
    ['id'=> 5, 'name'=> 'Siti Rahayu',         'email'=> 'siti@example.com',    'role'=> 'Viewer',        'status'=> 'inactive'],
];
@endphp

<x-data-table
    title="Daftar Pengguna"
    subtitle="Menampilkan 5 dari 248 pengguna"
    :headers="['#', 'Nama', 'Email', 'Role', 'Status', 'Aksi']"
>
    @foreach($users as $user)
    <tr class="hover:bg-slate-50 transition-colors duration-150">
        <td class="px-6 py-4 text-slate-400 font-mono text-xs">{{ $user['id'] }}</td>
        <td class="px-6 py-4">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center
                            justify-center text-white text-xs font-semibold flex-shrink-0">
                    {{ strtoupper(substr($user['name'], 0, 1)) }}
                </div>
                <span class="font-medium text-slate-700">{{ $user['name'] }}</span>
            </div>
        </td>
        <td class="px-6 py-4 text-slate-500">{{ $user['email'] }}</td>
        <td class="px-6 py-4">
            <span class="px-2.5 py-1 text-xs font-medium rounded-full
                {{ $user['role'] === 'Administrator'
                    ? 'bg-primary-50 text-primary-600'
                    : ($user['role'] === 'Editor'
                        ? 'bg-warning/10 text-warning'
                        : 'bg-slate-100 text-slate-500') }}">
                {{ $user['role'] }}
            </span>
        </td>
        <td class="px-6 py-4">
            <span class="flex items-center gap-1.5 text-xs font-medium
                {{ $user['status'] === 'active' ? 'text-success' : 'text-slate-400' }}">
                <span class="w-1.5 h-1.5 rounded-full
                    {{ $user['status'] === 'active' ? 'bg-success' : 'bg-slate-300' }}"></span>
                {{ ucfirst($user['status']) }}
            </span>
        </td>
        <td class="px-6 py-4">
            <button class="text-xs text-primary-500 hover:text-primary-700
                           font-medium transition-colors duration-150">Edit</button>
        </td>
    </tr>
    @endforeach

    <x-slot name="tableFooter">
        <p class="text-xs text-slate-400">Menampilkan 5 dari 248 pengguna</p>
    </x-slot>
</x-data-table>

@endsection
```

---

### Step 5 — Commit dan Push

Setelah selesai edit kedua file, jalankan perintah ini di terminal:

```bash
git add resources/views/pages/settings.blade.php
git add resources/views/pages/users.blade.php
git add resources/views/pages/dashboard.blade.php
git commit -m "fix: pisahkan konten settings dan users ke file yang benar"
git push origin feature/ali-content
```