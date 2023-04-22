@php($show = $name . '.show')


<div class="alert alert-info" role="alert">
    {{ $msg }}
    <a class="alert-link" href="{{ route($show, $person) }}">Clique aqui</a>
    para ver o último {{ $text }} cadastrado.
</div>
