@props(['route', 'post' => null, 'put' => null])

@php
    $method = $post || $put ? 'POST' : 'GET';
@endphp

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $method }}">
    @csrf

    @if ($put)
        @method('put')
    @endif

    {{ $slot }}
</form>