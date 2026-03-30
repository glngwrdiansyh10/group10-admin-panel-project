@props([
    'title'    => 'Data Table',
    'subtitle' => '',
    'headers'  => [],    {{-- array of column header labels --}}
    'addLabel' => 'Tambah',
    'addRoute' => null,
])

<div class="bg-white rounded-2xl border border-border shadow-sm overflow-hidden">

    {{-- Table Header --}}
    <div class="flex items-center justify-between px-6 py-4 border-b border-border">
        <div>
            <h2 class="font-semibold text-slate-800">{{ $title }}</h2>
            @if($subtitle)
            <p class="text-xs text-slate-400 mt-0.5">{{ $subtitle }}</p>
            @endif
        </div>
        @if($addRoute)
        <a href="{{ route($addRoute) }}"
           class="flex items-center gap-1.5 px-4 py-2 bg-primary-500 text-white
                  text-sm font-medium rounded-xl hover:bg-primary-600
                  transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 4v16m8-8H4" />
            </svg>
            {{ $addLabel }}
        </a>
        @endif
    </div>

    {{-- Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-left">
                    @foreach($headers as $header)
                    <th class="px-6 py-3 font-medium">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-border">
                {{ $slot }}
            </tbody>
        </table>
    </div>

    {{-- Footer slot (opsional) --}}
    @isset($tableFooter)
    <div class="px-6 py-3 border-t border-border bg-slate-50">
        {{ $tableFooter }}
    </div>
    @endisset
</div>
