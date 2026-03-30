@props([
    'title'  => 'Title',
    'value'  => '0',
    'badge'  => null,
    'color'  => 'primary',   {{-- primary | success | warning | danger | info --}}
    'icon'   => null,
])

@php
$colorMap = [
    'primary' => ['bg' => 'bg-primary-50',   'icon' => 'text-primary-500'],
    'success' => ['bg' => 'bg-success/10',   'icon' => 'text-success'],
    'warning' => ['bg' => 'bg-warning/10',   'icon' => 'text-warning'],
    'danger'  => ['bg' => 'bg-danger/10',    'icon' => 'text-danger'],
    'info'    => ['bg' => 'bg-info/10',      'icon' => 'text-info'],
];
$c = $colorMap[$color] ?? $colorMap['primary'];
@endphp

<div class="bg-white rounded-2xl p-5 border border-border shadow-sm
            hover:shadow-md transition-shadow duration-200">
    <div class="flex items-center justify-between mb-4">

        {{-- Icon --}}
        <div class="p-3 rounded-xl {{ $c['bg'] }}">
            @if($icon)
            <svg class="w-6 h-6 {{ $c['icon'] }}" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                {!! $icon !!}
            </svg>
            @else
            <div class="w-6 h-6 {{ $c['icon'] }} font-bold text-lg flex items-center
                        justify-center">?</div>
            @endif
        </div>

        {{-- Badge --}}
        @if($badge)
        <span class="text-xs font-medium px-2.5 py-1 rounded-full
                     {{ $c['bg'] }} {{ $c['icon'] }}">
            {{ $badge }}
        </span>
        @endif
    </div>

    <p class="text-3xl font-bold text-slate-800">{{ $value }}</p>
    <p class="text-sm text-slate-400 mt-1">{{ $title }}</p>
</div>
