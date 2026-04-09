@props(['title' => 'Dashboard', 'subtitle' => 'Selamat datang di panel admin Group 10'])

<header class="flex items-center justify-between px-6 py-3
               bg-white border-b border-border shadow-sm flex-shrink-0 transition-all duration-300">

    <div class="flex items-center gap-4">
        <button id="sidebar-toggle"
                class="p-2 rounded-xl text-slate-500 hover:bg-slate-100 hover:text-slate-700
                       transition-all duration-200 lg:hidden">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div>
            <h1 class="text-base font-semibold text-slate-800 leading-tight">{{ $title }}</h1>
            <p class="text-xs text-slate-400 mt-0.5">{{ $subtitle }}</p>
        </div>
    </div>

    <div class="flex items-center gap-3">

        {{-- Search Bar --}}
        <div class="relative hidden md:flex items-center">
            <svg class="absolute left-3 w-4 h-4 text-slate-400 pointer-events-none"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z" />
            </svg>
            <input type="text" placeholder="Cari sesuatu..."
                   class="pl-9 pr-4 py-2 text-sm bg-slate-50 border border-border rounded-xl
                          text-slate-700 placeholder-slate-400 focus:outline-none
                          focus:ring-2 focus:ring-primary-300 focus:border-primary-400
                          focus:bg-white transition-all duration-200 w-52">
        </div>

        {{-- Notification Bell --}}
        <div class="relative" id="notif-wrapper">
            <button id="notif-btn"
                    class="relative p-2 rounded-xl text-slate-500 hover:bg-slate-100
                           hover:text-slate-700 transition-all duration-200">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0
                          00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0
                          .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="absolute top-1 right-1 w-4 h-4 bg-danger text-white text-[10px]
                             font-bold rounded-full flex items-center justify-center leading-none">3</span>
            </button>
            <div id="notif-dropdown"
                 class="hidden absolute right-0 top-full mt-2 w-72 bg-white rounded-2xl
                        border border-border shadow-xl z-50 overflow-hidden">
                <div class="px-4 py-3 border-b border-border flex items-center justify-between">
                    <p class="text-sm font-semibold text-slate-800">Notifikasi</p>
                    <span class="text-xs text-primary-500 font-medium cursor-pointer hover:underline">
                        Tandai semua dibaca</span>
                </div>
                @foreach([
                    ['icon'=>'👤','msg'=>'User baru mendaftar',   'time'=>'5 menit lalu','unread'=>true],
                    ['icon'=>'⚙️','msg'=>'Pengaturan diperbarui', 'time'=>'1 jam lalu',  'unread'=>true],
                    ['icon'=>'📊','msg'=>'Laporan bulan ini siap','time'=>'3 jam lalu',  'unread'=>false],
                ] as $notif)
                <div class="flex items-start gap-3 px-4 py-3 cursor-pointer
                            {{ $notif['unread'] ? 'bg-primary-50' : 'hover:bg-slate-50' }}
                            transition-colors duration-150">
                    <span class="text-lg leading-none mt-0.5">{{ $notif['icon'] }}</span>
                    <div class="flex-1">
                        <p class="text-sm text-slate-700 font-medium">{{ $notif['msg'] }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $notif['time'] }}</p>
                    </div>
                    @if($notif['unread'])
                        <span class="w-2 h-2 bg-primary-500 rounded-full mt-1.5 flex-shrink-0"></span>
                    @endif
                </div>
                @endforeach
                <div class="px-4 py-3 border-t border-border text-center">
                    <a href="#" class="text-xs text-primary-500 font-medium hover:underline">
                        Lihat semua notifikasi</a>
                </div>
            </div>
        </div>

        <div class="w-px h-6 bg-border"></div>

        {{-- Avatar + Dropdown --}}
        <div class="relative" id="avatar-wrapper">
            <button id="avatar-btn"
                    class="flex items-center gap-2.5 p-1.5 rounded-xl hover:bg-slate-100
                           transition-all duration-200 group">
                <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-primary-400 to-primary-600
                             flex items-center justify-center text-white font-semibold text-sm shadow-sm
                             group-hover:shadow-md group-hover:scale-105 transition-all duration-200">G</div>
                <div class="hidden sm:block text-left">
                    <p class="text-sm font-semibold text-slate-800 leading-tight">Gilang</p>
                    <p class="text-xs text-slate-400">Administrator</p>
                </div>
                <svg id="avatar-chevron" class="w-4 h-4 text-slate-400 hidden sm:block
                     transition-transform duration-200" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="avatar-dropdown"
                 class="hidden absolute right-0 top-full mt-2 w-52 bg-white rounded-2xl
                        border border-border shadow-xl z-50 overflow-hidden">
                <div class="px-4 py-3 border-b border-border">
                    <p class="text-sm font-semibold text-slate-800">Gilang Wirdiansyah</p>
                    <p class="text-xs text-slate-400 truncate">gilang@group10.com</p>
                </div>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600
                                   hover:bg-slate-50 transition-colors duration-150">
                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>Profil Saya</a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600
                                   hover:bg-slate-50 transition-colors duration-150">
                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066
                              c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756
                              2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724
                              1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0
                              00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572
                              c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826
                              -3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>Pengaturan</a>
                <div class="border-t border-border">
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-danger
                                       hover:bg-red-50 transition-colors duration-150">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0
                                  01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>Keluar</a>
                </div>
            </div>
        </div>
    </div>
</header>

@once
@push('scripts')
<script>
    const notifBtn=document.getElementById('notif-btn'),
          notifDropdown=document.getElementById('notif-dropdown'),
          avatarBtn=document.getElementById('avatar-btn'),
          avatarDropdown=document.getElementById('avatar-dropdown'),
          avatarChevron=document.getElementById('avatar-chevron');
    function toggleDD(btn,dd,ch=null){
        btn.addEventListener('click',e=>{
            e.stopPropagation();
            const hidden=dd.classList.contains('hidden');
            [notifDropdown,avatarDropdown].forEach(d=>d.classList.add('hidden'));
            if(ch)ch.style.transform='';
            if(hidden){dd.classList.remove('hidden');if(ch)ch.style.transform='rotate(180deg)';}
        });
    }
    toggleDD(notifBtn,notifDropdown);
    toggleDD(avatarBtn,avatarDropdown,avatarChevron);
    document.addEventListener('click',()=>{
        notifDropdown.classList.add('hidden');
        avatarDropdown.classList.add('hidden');
        avatarChevron.style.transform='';
    });
</script>
@endpush
@endonce