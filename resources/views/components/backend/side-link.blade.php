@props(['active'])

@php
$classes = $active ?? false ? 'text-white transition-all bg-blue-500 cursor-pointer nav-link active shadow-active' : 'flex items-center px-4 py-2 transition-all rounded cursor-pointer dark:text-gray-600';
@endphp

<li class="iq-sidebar">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <i class="icon">
            {{ $slot }}
        </i>
        <span class="item-name rtl:pr-4">{{ $nav_title }}</span>
    </a>
</li>
