@props(['title' => 'Dashboard', 'subtitle' => 'Selamat datang di panel admin Group 10'])

<header class="flex items-center justify-between px-6 py-4
               bg-white border-b border-border shadow-sm flex-shrink-0">

    {{-- Kiri: Hamburger + Judul --}}
    <div class="flex items-center gap-4">
        <button id="sidebar-toggle"
                class="p-2 rounded-lg text-slate-500 hover:bg-slate-100
                       transition-colors duration-200 lg:hidden">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div>
            <h1 class="text-lg font-semibold text-slate-800">{{ $title }}</h1>
            <p class="text-xs text-slate-400 mt-0.5">{{ $subtitle }}</p>
        </div>
    </div>

    {{-- Kanan: Notifikasi + Avatar --}}
    <div class="flex items-center gap-3">

        {{-- Notification bell --}}
        <button class="relative p-2 rounded-xl text-slate-500 hover:bg-slate-100
                       transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118
                      14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4
                      0v.341C7.67 6.165 6 8.388 6 11v3.159c0
                      .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0
                      11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2
                         bg-danger rounded-full"></span>
        </button>

        <div class="w-px h-6 bg-border"></div>

        {{-- User Avatar --}}
        <div class="flex items-center gap-2.5 cursor-pointer group">
            <div class="w-9 h-9 rounded-xl bg-primary-500 flex items-center
                        justify-center text-white font-semibold text-sm shadow-sm
                        group-hover:ring-2 group-hover:ring-primary-300
                        transition-all">
                G
            </div>
            <div class="hidden sm:block">
                <p class="text-sm font-semibold text-slate-800 leading-tight">Gilang</p>
                <p class="text-xs text-slate-400">Administrator</p>
            </div>
            <svg class="w-4 h-4 text-slate-400 hidden sm:block"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>
</header>
