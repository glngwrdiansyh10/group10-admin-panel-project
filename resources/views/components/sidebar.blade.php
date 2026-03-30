@php
$navItems = [
    [
        'label'  => 'Dashboard',
        'route'  => 'dashboard',
        'icon'   => '<path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2
                          2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0
                          011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />',
    ],
    [
        'label'  => 'Users',
        'route'  => 'users',
        'icon'   => '<path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0
                          0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />',
    ],
    [
        'label'  => 'Settings',
        'route'  => 'settings',
        'icon'   => '<path stroke-linecap="round" stroke-linejoin="round"
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
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
    ],
];
@endphp

<aside id="sidebar"
       class="flex flex-col w-64 min-h-screen bg-sidebar-bg text-sidebar-text
              transition-all duration-300 ease-in-out flex-shrink-0">

    {{-- Brand --}}
    <div class="flex items-center gap-3 px-6 py-5 border-b border-white/10">
        <div class="flex items-center justify-center w-9 h-9 rounded-xl
                    bg-primary-500 shadow-lg">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806
                      3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42
                      3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42
                      3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42
                      0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42
                      0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0
                      01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42
                      0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0
                      013.138-3.138z" />
            </svg>
        </div>
        <div>
            <p class="text-white font-semibold text-sm leading-tight">Group10 Panel</p>
            <p class="text-sidebar-text text-xs">v1.0.0</p>
        </div>
    </div>

    {{-- Navigation --}}
    <nav class="flex-1 px-4 py-5 space-y-1 overflow-y-auto">
        <p class="px-3 mb-3 text-xs font-semibold uppercase tracking-widest
                  text-slate-500">
            Main Menu
        </p>

        @foreach($navItems as $item)
        <a href="{{ route($item['route']) }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm
                  font-medium transition-all duration-200
                  {{ request()->routeIs($item['route'])
                     ? 'bg-sidebar-active text-white shadow-md'
                     : 'text-sidebar-text hover:bg-sidebar-hover hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="1.8">
                {!! $item['icon'] !!}
            </svg>
            <span>{{ $item['label'] }}</span>

            {{-- Active indicator dot --}}
            @if(request()->routeIs($item['route']))
            <span class="ml-auto w-1.5 h-1.5 rounded-full bg-white/70"></span>
            @endif
        </a>
        @endforeach
    </nav>

    {{-- User info bawah --}}
    <div class="px-4 py-4 border-t border-white/10">
        <div class="flex items-center gap-3 px-3 py-2.5 rounded-xl
                    hover:bg-sidebar-hover transition-all duration-200 cursor-pointer">
            <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center
                        justify-center text-white text-sm font-semibold flex-shrink-0">
                G
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-white text-sm font-medium truncate">Gilang</p>
                <p class="text-sidebar-text text-xs truncate">Administrator</p>
            </div>
        </div>
    </div>
</aside>
