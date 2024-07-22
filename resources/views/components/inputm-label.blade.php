@props(['value', 'required' => false])

<label {{ $attributes }}>
    {{ $value ?? $slot }}
    @if($required)
        <span class="text-danger"> *</span>
    @endif
</label>
