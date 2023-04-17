@php
    $readonly = request()->routeIs('*.show');
@endphp


<section class="relative-data mt-5">

    <h4 class="text-center">Dados Pessoais do Responsável</h4>


    {{-- Campo para nome do responsável pelo aluno --}}
    <div class="form-group">

        <label for="relative[name]">Nome do Responsável:</label>
        <input class="form-control" id="relative[name]" name="relative[name]" type="text" {{-- value="{{ $relative[name] ?? old('relative[name]') }}" --}}
               maxlength="100" placeholder="Insira o nome do(a) responsável..." @readonly($readonly)>

    </div>


    {{-- Campo para o parentesco e o telefone do responsável --}}
    <div class="form-row">

        <div class="form-group col-sm">

            <label for="relative[kinship]">Parentesco:</label>
            <select class="form-control" id="relative[kinship]" name="kinship" @readonly($readonly)>
                <option value="mãe">mãe</option>
                <option value="pai">pai</option>
                <option value="tia">tia</option>
                <option value="tio">tio</option>
                <option value="avó">avó</option>
                <option value="avô">avô</option>
                <option>outro</option>
            </select>

        </div>


        <div class="form-group col-sm">

            <label for="relative[telephone]">Telefone:</label>
            <input class="form-control js-fone" id="relative[telephone]" name="relative[telephone]" type="text"
                   @readonly($readonly)>

        </div>

    </div>

    {{-- TODO: fazer um campo para acrescentar outros responsáveis além dos do select --}}
    {{-- <div class="form-row">

        <label for="name">Outro:</label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
               value="#" @readonly($readonly)>

    </div> --}}

</section>
