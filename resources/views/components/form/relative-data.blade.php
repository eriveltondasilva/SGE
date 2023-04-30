@php
    $readonly = request()->routeIs('*.show');
    $kinship = ['mãe', 'pai', 'tia', 'tio', 'avó', 'avô', 'outro'];
    // TODO: fazer uma tabela para substituir esse array
@endphp
@props(['person'])

<section class="relative-data mt-5">

    <h4 class="text-center">Dados Pessoais do Responsável</h4>


    {{-- Campo para nome do responsável pelo aluno --}}
    <div class="form-group">

        <label for="relative[name]">Nome do Responsável:</label>
        <input class="form-control" id="relative[name]" name="relative[name]" type="text"
               value="{{ old('relative[name]', $person->relative->name ?? '') }}" maxlength="100"
               placeholder="Insira o nome do(a) responsável..." @readonly($readonly)>

    </div>


    {{-- Campo para e-mail --}}
    <div class="form-group">

        <label for="relative[email]">E-mail:</label>
        <input class="form-control" id="relative[email]" name="relative[email]" type="email"
               value="{{ old('relative[email]', $person->relative->email ?? '') }}" maxlength="100"
               placeholder="Insira o e-mail..." @readonly($readonly)>

    </div>

    {{-- {{ $person->relative->kinship}} --}}

    {{-- Campo para o parentesco e o telefone do responsável --}}
    <div class="form-row">

        <div class="form-group col-sm">

            <label for="relative[kinship]">Parentesco:</label>
            <select class="form-control" id="relative[kinship]" name="relative[kinship]" @disabled($readonly)>
                <option>----------</option>
                @foreach ($kinship as $item)
                    <option value="{{ $loop->index }}" @selected(empty($person) ? '' : $person->relative->kinship == $loop->index)>
                        {{ $item }}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group col-sm">

            <label for="relative[telephone]">Telefone:</label>
            <input class="form-control js-fone" id="relative[telephone]" name="relative[telephone]" type="text"
                   value="{{ old('relative[telephone]', $person->relative->telephone ?? '') }}" @readonly($readonly)>

        </div>

    </div>

    {{-- TODO: fazer um campo para acrescentar outros responsáveis além dos do select --}}
    {{-- <div class="form-row">

        <label for="name">Outro:</label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
               value="#" @readonly($readonly)>

    </div> --}}

</section>
