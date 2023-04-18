@php
    $show = $name . '.show';
@endphp

@if (session()->exists('store'))
    <div class="alert alert-info" role="alert">
        {{ $text }} cadastrado com sucesso!
        <a class="alert-link" href="{{ route($show, $person) }}">Clique aqui</a>
        para ver o último {{ $text }} cadastrado.
    </div>
@elseif (session()->exists('update'))
    <div class="alert alert-info js-close-alert" role="alert">
        {{ $text }} atualizado com sucesso!
    </div>
@endif
