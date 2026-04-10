@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Ringkasan data dan statistik sistem')

@section('content')

{{-- ── Stat Cards menggunakan komponen x-stat-card ── --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5 mb-8">

    <x-stat-card
        title="Total Users"
        value="248"
        badge="+12%"
        color="primary"
        icon='<path stroke-linecap="round" stroke-linejoin="round"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7
              20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002
              5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />'
    />

    <x-stat-card
        title="Active Sessions"
        value="47"
        badge="Live"
        color="info"
        icon='<path stroke-linecap="round" stroke-linejoin="round"
              d="M13 10V3L4 14h7v7l9-11h-7z" />'
    />

    <x-stat-card
        title="Total Reports"
        value="18"
        badge="+5 baru"
        color="warning"
        icon='<path stroke-linecap="round" stroke-linejoin="round"
              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1
              1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />'
    />

</div>

{{-- ── Data Table menggunakan komponen x-data-table ── --}}
@php
$users = [
    ['id'=> 1, 'name'=> 'Gilang Wardiansyah', 'email'=> 'gilang@group10.com',  'role'=> 'Administrator', 'status'=> 'active'],
    ['id'=> 2, 'name'=> 'Nazwa Anggota',      'email'=> 'nazwa@group10.com',   'role'=> 'Editor',        'status'=> 'active'],
    ['id'=> 3, 'name'=> 'Ali Nurrohmat',      'email'=> 'ali@group10.com',     'role'=> 'Editor',        'status'=> 'active'],
    ['id'=> 4, 'name'=> 'Ahmad Fauzi',        'email'=> 'ahmad@example.com',   'role'=> 'Viewer',        'status'=> 'active'],
    ['id'=> 5, 'name'=> 'Dewi Kusuma',        'email'=> 'dewi@example.com',    'role'=> 'Viewer',        'status'=> 'inactive'],
];
@endphp

<x-data-table
    title="Daftar Pengguna"
    subtitle="Menampilkan 5 data terbaru"
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

    {{-- Footer slot --}}
    <x-slot name="tableFooter">
        <p class="text-xs text-slate-400">Menampilkan 5 dari 248 pengguna</p>
    </x-slot>
</x-data-table>

@endsection
