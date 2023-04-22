@props(['type' => 'info'])


<div {{ $attributes->merge(['class' => 'alert alert-' . $type . ' js-close_alert']) }}>
    {{ $msg }}
</div>
