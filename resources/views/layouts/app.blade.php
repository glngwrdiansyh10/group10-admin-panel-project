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

    <div class="flex h-screen overflow-hidden">

        {{-- ════ SIDEBAR Component ════ --}}
        <x-sidebar />

        {{-- ════ MAIN AREA ════ --}}
        <div class="flex flex-col flex-1 min-w-0 overflow-hidden">

            {{-- Header Component --}}
            <x-header
                :title="View::yieldContent('page-title') ?: 'Dashboard'"
                :subtitle="View::yieldContent('page-subtitle') ?: 'Selamat datang di panel admin Group 10'"
            />

            {{-- Content --}}
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>

            {{-- Footer Component --}}
            <x-footer />

        </div>
    </div>

    {{-- Sidebar toggle (mobile) --}}
    <script>
        const btn = document.getElementById('sidebar-toggle');
        const sb  = document.getElementById('sidebar');
        if (btn && sb) {
            btn.addEventListener('click', () => {
                sb.classList.toggle('hidden');
            });
        }
    </script>

    @stack('scripts')
</body>
</html>
