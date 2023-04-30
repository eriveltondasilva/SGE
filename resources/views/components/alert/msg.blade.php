@props(['type' => 'info'])


@if (session('msg'))
    <div {{ $attributes->merge(['class' => 'alert alert-' . $type . ' js-close_alert', 'role' => 'alert']) }}>
        {{ session('msg') }}
    </div>
@endif
