@props(['is_active' => ''])
<a {{ $attributes->class(['nav-link', 'active' => $is_active]) }}>
    {{ $icon }}
    <p {{-- class="text-uppercase" --}}>
        {{ $slot }}
    </p>
</a>