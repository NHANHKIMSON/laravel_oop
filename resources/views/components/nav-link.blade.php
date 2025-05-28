@props(['active'])

@php
    $classes = $active
        ? 'text-blue-600'
        : 'text-white font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} @if ($active) aria-current="page" @endif>
    {{ $slot }}
</a>