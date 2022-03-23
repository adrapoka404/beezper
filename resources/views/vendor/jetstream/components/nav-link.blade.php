@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-purple-200 rounded-full inline-flex items-center px-3 py-3 text-sm font-quick font-medium leading-5 text-white focus:outline-none focus:border-purple transition'
            : 'bg-purple-200 rounded-full inline-flex items-center px-3 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-bold hover:bg-white focus:outline-none focus:text-white transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
