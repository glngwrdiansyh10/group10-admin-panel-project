@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Ringkasan data dan statistik sistem')

@section('content')

{{-- ── Stat Cards ── --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5 mb-8">

    {{-- Card 1: Total Users --}}
    <div class="bg-white rounded-2xl p-5 border border-border shadow-sm hover:shadow-md
                transition-shadow duration-200">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 rounded-xl bg-primary-50">
                <svg class="w-6 h-6 text-primary-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10
                          0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0
                          015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0
                          0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <span class="text-xs font-medium px-2.5 py-1 rounded-full bg-success/10 text-success">
                +12%
            </span>
        </div>
        <p class="text-3xl font-bold text-slate-800">248</p>
        <p class="text-sm text-slate-400 mt-1">Total Users</p>
    </div>

    {{-- Card 2: Active Sessions --}}
    <div class="bg-white rounded-2xl p-5 border border-border shadow-sm hover:shadow-md
                transition-shadow duration-200">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 rounded-xl bg-info/10">
                <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <span class="text-xs font-medium px-2.5 py-1 rounded-full bg-info/10 text-info">
                Live
            </span>
        </div>
        <p class="text-3xl font-bold text-slate-800">47</p>
        <p class="text-sm text-slate-400 mt-1">Active Sessions</p>
    </div>

    {{-- Card 3: Reports --}}
    <div class="bg-white rounded-2xl p-5 border border-border shadow-sm hover:shadow-md
                transition-shadow duration-200">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 rounded-xl bg-warning/10">
                <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0
                          012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0
                          01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <span class="text-xs font-medium px-2.5 py-1 rounded-full bg-warning/10 text-warning">
                +5 baru
            </span>
        </div>
        <p class="text-3xl font-bold text-slate-800">18</p>
        <p class="text-sm text-slate-400 mt-1">Total Reports</p>
    </div>

</div>

{{-- ── Data Table ── --}}
<div class="bg-white rounded-2xl border border-border shadow-sm overflow-hidden">

    {{-- Table Header --}}
    <div class="flex items-center justify-between px-6 py-4 border-b border-border">
        <div>
            <h2 class="font-semibold text-slate-800">Daftar Pengguna</h2>
            <p class="text-xs text-slate-400 mt-0.5">Menampilkan 5 data terbaru</p>
        </div>
        <button class="flex items-center gap-1.5 px-4 py-2 bg-primary-500 text-white text-sm
                       font-medium rounded-xl hover:bg-primary-600 transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            Tambah
        </button>
    </div>

    {{-- Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-left">
                    <th class="px-6 py-3 font-medium">#</th>
                    <th class="px-6 py-3 font-medium">Nama</th>
                    <th class="px-6 py-3 font-medium">Email</th>
                    <th class="px-6 py-3 font-medium">Role</th>
                    <th class="px-6 py-3 font-medium">Status</th>
                    <th class="px-6 py-3 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border">
                @php
                $users = [
                    ['id'=> 1, 'name'=> 'Gilang Firmansyah', 'email'=> 'gilang@group10.com',
                     'role'=> 'Administrator', 'status'=> 'active'],
                    ['id'=> 2, 'name'=> 'Rizky Anggota 1',   'email'=> 'rizky@group10.com',
                     'role'=> 'Editor',        'status'=> 'active'],
                    ['id'=> 3, 'name'=> 'Siti Anggota 2',    'email'=> 'siti@group10.com',
                     'role'=> 'Viewer',        'status'=> 'inactive'],
                    ['id'=> 4, 'name'=> 'Ahmad User',        'email'=> 'ahmad@example.com',
                     'role'=> 'Editor',        'status'=> 'active'],
                    ['id'=> 5, 'name'=> 'Dewi User',         'email'=> 'dewi@example.com',
                     'role'=> 'Viewer',        'status'=> 'active'],
                ];
                @endphp

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
                                       font-medium transition-colors duration-150">
                            Edit
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Table Footer --}}
    <div class="px-6 py-3 border-t border-border bg-slate-50">
        <p class="text-xs text-slate-400">Menampilkan 5 dari 248 pengguna</p>
    </div>

</div>
@endsection
