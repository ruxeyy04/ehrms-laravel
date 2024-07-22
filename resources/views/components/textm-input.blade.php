@props(['disabled' => false, 'error' => false])

@php
    $classes = 'form-control';
    if ($error) {
        $classes .= ' is-invalid';
    }
@endphp

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes]) }}/>
