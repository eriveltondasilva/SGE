@php($show = $name . '.show')


@if (session('msg'))
    <div {{ $attributes->merge(['class' => 'alert alert-info', 'role' => 'alert']) }}>
        {{ session('msg') }}
        <br>
        <a class="alert-link" href="{{ route($show, $person) }}">Clique aqui</a>
        para ver o último {{ $text }} cadastrado.
    </div>
@endif
