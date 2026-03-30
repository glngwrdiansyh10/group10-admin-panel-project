<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Group 10 Admin Panel - Dashboard Management System">
    <title>@yield('title', 'Dashboard') — Group10 Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface font-sans antialiased">

    {{-- ── Wrapper utama (flex row: sidebar + main) ── --}}
    <div class="flex h-screen overflow-hidden">

        {{-- ════════════════════════════════════════════
             SIDEBAR
        ════════════════════════════════════════════ --}}
        <aside id="sidebar"
               class="flex flex-col w-64 min-h-screen bg-sidebar-bg text-sidebar-text
                      transition-all duration-300 ease-in-out flex-shrink-0">

            {{-- Logo / Brand --}}
            <div class="flex items-center gap-3 px-6 py-5 border-b border-white/10">
                <div class="flex items-center justify-center w-9 h-9 rounded-xl bg-primary-500 shadow-lg">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0
                              014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42
                              3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806
                              1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42
                              3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0
                              01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438
                              3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm leading-tight">Group10 Panel</p>
                    <p class="text-sidebar-text text-xs">v1.0.0</p>
                </div>
            </div>

            {{-- Navigation --}}
            <nav class="flex-1 px-4 py-5 space-y-1 overflow-y-auto">

                {{-- Label Section --}}
                <p class="px-3 mb-3 text-xs font-semibold uppercase tracking-widest text-slate-500">
                    Main Menu
                </p>

                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium
                          transition-all duration-200 group
                          {{ request()->routeIs('dashboard')
                             ? 'bg-sidebar-active text-white shadow-md'
                             : 'text-sidebar-text hover:bg-sidebar-hover hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2
                              2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0
                              011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                {{-- Users --}}
                <a href="{{ route('users') }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium
                          transition-all duration-200 group
                          {{ request()->routeIs('users')
                             ? 'bg-sidebar-active text-white shadow-md'
                             : 'text-sidebar-text hover:bg-sidebar-hover hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0
                              0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>Users</span>
                </a>

                {{-- Settings --}}
                <a href="{{ route('settings') }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium
                          transition-all duration-200 group
                          {{ request()->routeIs('settings')
                             ? 'bg-sidebar-active text-white shadow-md'
                             : 'text-sidebar-text hover:bg-sidebar-hover hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0
                              002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0
                              001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0
                              00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0
                              00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0
                              00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0
                              00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0
                              001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07
                              2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Settings</span>
                </a>

            </nav>

            {{-- User profile di bawah sidebar --}}
            <div class="px-4 py-4 border-t border-white/10">
                <div class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-sidebar-hover
                            transition-all duration-200 cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center
                                text-white text-sm font-semibold flex-shrink-0">
                        G
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-white text-sm font-medium truncate">Gilang</p>
                        <p class="text-sidebar-text text-xs truncate">Administrator</p>
                    </div>
                </div>
            </div>
        </aside>

        {{-- ════════════════════════════════════════════
             MAIN AREA (header + content + footer)
        ════════════════════════════════════════════ --}}
        <div class="flex flex-col flex-1 min-w-0 overflow-hidden">

            {{-- ── HEADER ── --}}
            <header class="flex items-center justify-between px-6 py-4
                           bg-white border-b border-border shadow-sm flex-shrink-0">

                {{-- Hamburger (mobile) + Page title --}}
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle"
                            class="p-2 rounded-lg text-slate-500 hover:bg-slate-100
                                   transition-colors duration-200 lg:hidden">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div>
                        <h1 class="text-lg font-semibold text-slate-800">@yield('page-title', 'Dashboard')</h1>
                        <p class="text-xs text-slate-400 mt-0.5">@yield('page-subtitle', 'Selamat datang di panel admin Group 10')</p>
                    </div>
                </div>

                {{-- Right: Notifications + Avatar --}}
                <div class="flex items-center gap-3">

                    {{-- Notification Bell --}}
                    <button class="relative p-2 rounded-xl text-slate-500 hover:bg-slate-100
                                   transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002
                                  6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388
                                  6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0
                                  11-6 0v-1m6 0H9" />
                        </svg>
                        {{-- Badge --}}
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-danger rounded-full"></span>
                    </button>

                    {{-- Divider --}}
                    <div class="w-px h-6 bg-border"></div>

                    {{-- User Avatar --}}
                    <div class="flex items-center gap-2.5 cursor-pointer group">
                        <div class="w-9 h-9 rounded-xl bg-primary-500 flex items-center justify-center
                                    text-white font-semibold text-sm shadow-sm
                                    group-hover:ring-2 group-hover:ring-primary-300 transition-all">
                            G
                        </div>
                        <div class="hidden sm:block">
                            <p class="text-sm font-semibold text-slate-800 leading-tight">Gilang</p>
                            <p class="text-xs text-slate-400">Administrator</p>
                        </div>
                        <svg class="w-4 h-4 text-slate-400 hidden sm:block" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </header>

            {{-- ── CONTENT AREA ── --}}
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>

            {{-- ── FOOTER ── --}}
            <footer class="px-6 py-4 bg-white border-t border-border flex-shrink-0">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-slate-400">
                    <p>
                        &copy; {{ date('Y') }}
                        <span class="font-medium text-slate-500">Group 10 Admin Panel</span>.
                        All rights reserved.
                    </p>
                    <p>Built with
                        <span class="text-primary-500 font-medium">Laravel</span> &amp;
                        <span class="text-primary-500 font-medium">Tailwind CSS</span>
                    </p>
                </div>
            </footer>

        </div>{{-- end .main area --}}
    </div>{{-- end .flex.h-screen --}}

    {{-- ── Sidebar toggle script (mobile) ── --}}
    <script>
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');

        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('absolute');
                sidebar.classList.toggle('z-50');
            });
        }
    </script>

    @stack('scripts')
</body>
</html>
