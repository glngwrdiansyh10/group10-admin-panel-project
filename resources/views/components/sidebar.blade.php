@php
$navItems = [
    ['label'=>'Dashboard','route'=>'dashboard','badge'=>null,
     'icon'=>'<path stroke-linecap="round" stroke-linejoin="round"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0
              01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
    ['label'=>'Users','route'=>'users','badge'=>'12',
     'icon'=>'<path stroke-linecap="round" stroke-linejoin="round"
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0
              00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>'],
    ['label'=>'Settings','route'=>'settings','badge'=>null,
     'icon'=>'<path stroke-linecap="round" stroke-linejoin="round"
              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066
              c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756
              2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724
              1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0
              00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572
              c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826
              -3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'],
];
@endphp

<aside id="sidebar" class="flex flex-col w-64 min-h-screen bg-sidebar-bg text-sidebar-text
       transition-all duration-300 ease-in-out flex-shrink-0 relative">

    <div class="flex items-center gap-3 px-5 py-5 border-b border-white/10">
        <div class="flex items-center justify-center w-9 h-9 rounded-xl shadow-lg cursor-pointer
                    bg-gradient-to-br from-primary-400 to-primary-600
                    hover:scale-110 transition-transform duration-200">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0
                      3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946
                      3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138
                      3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806
                      3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438
                      3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            </svg>
        </div>
        <div>
            <p class="text-white font-semibold text-sm leading-tight">Group10 Panel</p>
            <p class="text-sidebar-text text-xs mt-0.5">v1.0.0</p>
        </div>
    </div>

    <nav class="flex-1 px-4 py-5 space-y-1 overflow-y-auto">
        <p class="px-3 mb-3 text-[10px] font-semibold uppercase tracking-widest text-slate-500">
            Main Menu</p>
        @foreach($navItems as $item)
        @php $active = request()->routeIs($item['route']); @endphp
        <a href="{{ route($item['route']) }}"
           class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium
                  transition-all duration-200 relative
                  {{ $active ? 'bg-sidebar-active text-white shadow-md'
                  : 'text-sidebar-text hover:bg-sidebar-hover hover:text-white hover:translate-x-1' }}">
            @if($active)
            <span class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-white/60 rounded-r-full"></span>
            @endif
            <svg class="w-5 h-5 flex-shrink-0 transition-colors duration-200
                        {{ $active ? 'text-white' : 'text-slate-400 group-hover:text-white' }}"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                {!! $item['icon'] !!}
            </svg>
            <span class="flex-1">{{ $item['label'] }}</span>
            @if($item['badge'])
            <span class="ml-auto px-2 py-0.5 text-[10px] font-bold rounded-full
                         bg-primary-500 text-white leading-none">{{ $item['badge'] }}</span>
            @elseif($active)
            <span class="ml-auto w-1.5 h-1.5 rounded-full bg-white/70"></span>
            @endif
        </a>
        @endforeach
    </nav>

    <div class="px-4 pb-2">
        <div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-white/5">
            <span class="w-2 h-2 bg-success rounded-full animate-ping absolute"></span>
            <span class="w-2 h-2 bg-success rounded-full relative"></span>
            <span class="text-xs text-sidebar-text ml-1">Sistem Online</span>
        </div>
    </div>

    <div class="px-4 py-4 border-t border-white/10">
        <div class="flex items-center gap-3 px-3 py-2.5 rounded-xl cursor-pointer group
                    hover:bg-sidebar-hover transition-all duration-200">
            <div class="relative w-8 h-8 flex-shrink-0">
                <div class="w-8 h-8 rounded-full flex items-center justify-center text-white
                             text-sm font-semibold bg-gradient-to-br from-primary-400 to-primary-600
                             group-hover:scale-110 transition-transform duration-200">G</div>
                <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-success rounded-full
                             border-2 border-sidebar-bg"></span>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-white text-sm font-medium truncate">Gilang</p>
                <p class="text-sidebar-text text-xs truncate">Administrator</p>
            </div>
            <svg class="w-4 h-4 text-slate-500 group-hover:text-white transition-colors duration-200"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
            </svg>
        </div>
    </div>
</aside>