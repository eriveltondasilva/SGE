@php
    $readonly = request()->routeIs('*.show');
@endphp


<section class="personal-data mt-5">

    <h4 class="text-center">Dados Pessoais</h4>


    {{-- Campo para o nome completo --}}
    <div class="form-group">

        <label for="name">Nome Completo<span class="text-red">*</span>:</label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
               value="{{ $person->name ?? old('name') }}" autofocus maxlength="100" placeholder="Insira o nome..."
               @readonly($readonly)>

        @error('name')
            <div class="alert alert-danger js-close-alert mt-1">Por favor, insira o nome completo.</div>
        @enderror

    </div>


    {{-- Campos para o RG e CPF --}}
    <div class="form-row">

        <div class="form-group col-sm">

            <label for="rg">RG:</label>
            <input class="form-control js-rg" id="rg" name="rg" type="text"
                   value="{{ $person->rg ?? old('rg') }}" @readonly($readonly)>

        </div>


        <div class="form-group col-sm">

            <label for="cpf">CPF:</label>
            <input class="form-control js-cpf" id="cpf" name="cpf" type="text"
                   value="{{ $person->cpf ?? old('cpf') }}" @readonly($readonly)>

        </div>

    </div>


    {{-- Campo para e-mail --}}
    <div class="form-group">

        <label for="email">E-mail:</label>
        <input class="form-control" id="email" name="email" type="email"
               value="{{ $person->email ?? old('email') }}" maxlength="100" placeholder="Insira o e-mail..."
               @readonly($readonly)>

    </div>


    {{-- Campos para lugar de nascimento e data de nascimento do  --}}
    <div class="form-row">

        <div class="form-group col-sm-7">

            <label for="telephone">Telefone:</label>
            <input class="form-control js-fone" id="telephone" name="telephone" type="text" @readonly($readonly)>

        </div>


        <div class="form-group col-sm-5">

            <label for="birth_date">Data de Nasc.:</label>
            <input class="form-control" id="birth_date" name="birth_date" type="date"
                   value="{{ $person->birth_date ?? old('birth_date') }}" @readonly($readonly)>

        </div>
    </div>


    {{-- Local de nascimento do aluno, (capo disponível somente nos formurários dos alunos) --}}
    @if (request()->routeIs('student.*'))
        <div class="form-group">

            <label for="birth_place">Lugar de Nascimento:</label>
            <input class="form-control" id="birth_place" name="birth_place" type="text"
                   value="{{ $person->birth_place ?? old('birth_place') }}" maxlength="50"
                   placeholder="Insira o local de nascimento..." @readonly($readonly)>

        </div>
    @endif


    {{-- Campo para selecionar o sexo  --}}
    <label for="male">Sexo:</label>
    <div class="form-group">

        <div class="form-check form-check-inline">

            <input class="form-check-input" id="gender_female" name="gender" type="radio" value="F"
                   @checked(isset($person) ? $person->gender === 'F' : 'checked') @readonly($readonly)>
            <label class="form-check-label" for="gender_female">Feminino</label>

        </div>


        <div class="form-check form-check-inline">

            <input class="form-check-input" id="gender_male" name="gender" type="radio" value="M"
                   @checked(isset($person) ? $person->gender === 'M' : '') @readonly($readonly)>
            <label class="form-check-label" for="gender_male">Masculino</label>

        </div>

    </div>

</section>
