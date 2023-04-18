@if (session()->exists('store'))
    <div class="alert alert-info js-close-alert" role="alert">
        {{ $alert }} cadastrado com sucesso! Aluno atulizado com sucesso!
        <a class="alert-link" href="{{ route('student.show', $person) }}">
            Clique aqui
        </a>
        para ver o último {{ $alert }} cadastrado.
    </div>
@elseif (session()->exists('update'))
    <div class="alert alert-info js-close-alert" role="alert">
        {{ $alert }} atualizado com sucesso!
    </div>
@endif
