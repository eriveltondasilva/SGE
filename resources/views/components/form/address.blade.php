@props(['person'])
@php($readonly = request()->routeIs('*.show'))


<section class="section-address mt-5">

    <h4 class="text-center">Dados de Endereço</h4>


    {{-- Campo para o endereço da rua --}}
    <div class="form-group">

        <label for="address[street]">Endereço:</label>
        <input class="form-control" id="address[street]" name="address[street]" type="text"
               value="{{ old('address[street]', $person->address->street ?? '') }}"
               placeholder="Av. São Francisco de Assis, nº 100..." @readonly($readonly)>

    </div>


    {{-- Campos para complemento e bairro do endereço --}}
    <div class="form-row">

        <div class="form-group col-sm-8">

            <label for="address[complement]">Complemento:</label>
            <input class="form-control" id="address[complement]" name="address[complement]" type="text"
                   value="{{ old('address[complement]', $person->address->complement ?? '') }}"
                   placeholder="Insira o complemento de endereço..." @readonly($readonly)>

        </div>


        <div class="form-group col-sm-4">

            <label for="address[neighborhood]">Bairro:</label>
            <input class="form-control" id="address[neighborhood]" name="address[neighborhood]" type="text"
                   value="{{ old('address[neighborhood]', $person->address->neighborhood ?? '') }}"
                   placeholder="Insira o bairro..." @readonly($readonly)>

        </div>

    </div>


    {{-- Campos para a cidade e o CEP --}}
    <div class="form-row">

        <div class="form-group col-sm-8">
            <label for="address[city]">Cidade:</label>
            <input class="form-control" id="address[city]" name="address[city]" type="text"
                   value="{{ old('address[city]', $person->address->city ?? '') }}"
                   placeholder="Insira a cidade do aluno..." @readonly($readonly)>
        </div>


        <div class="form-group col-sm-4">

            <label for="address[cep]">CEP:</label>
            <input class="form-control js-cep" id="address[cep]" name="address[cep]" type="text"
                   value="{{ old('address[cep]', $person->address->cep ?? '') }}" @readonly($readonly)>

        </div>
    </div>


    {{-- Campos para o Estado e a nacionalidade do aluno --}}
    <div class="form-group">

        <label for="address[state]">Estado:</label>
        <input class="form-control" id="address[state]" name="address[state]" type="text"
               value="{{ old('address[state]', $person->address->state ?? '') }}"
               placeholder="Insira o Estado do aluno..." @readonly($readonly)>

    </div>

</section>
