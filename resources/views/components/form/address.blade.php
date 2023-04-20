@props(['person'])
@php($readonly = request()->routeIs('*.show'))


<section class="section-address mt-5">

    <h4 class="text-center">Dados de Endereço</h4>


    {{-- Campo para o endereço da rua --}}
    <div class="form-group">

        <label for="street">Endereço:</label>
        <input class="form-control" id="street" name="street" type="text"
               value="{{ old('street', $person->address->street ?? '') }}"
               placeholder="Av. São Francisco de Assis, nº 100..." @readonly($readonly)>

    </div>


    {{-- Campos para complemento e bairro do endereço --}}
    <div class="form-row">

        <div class="form-group col-sm-8">

            <label for="complement">Complemento:</label>
            <input class="form-control" id="complement" name="complement" type="text"
                   value="{{ old('complement', $person->address->complement ?? '') }}"
                   placeholder="Insira o complemento de endereço..." @readonly($readonly)>

        </div>


        <div class="form-group col-sm-4">

            <label for="neighborhood">Bairro:</label>
            <input class="form-control" id="neighborhood" name="neighborhood" type="text"
                   value="{{ old('neighborhood', $person->address->neighborhood ?? '') }}"
                   placeholder="Insira o bairro..." @readonly($readonly)>

        </div>

    </div>


    {{-- Campos para a cidade e o CEP --}}
    <div class="form-row">

        <div class="form-group col-sm-8">
            <label for="city">Cidade:</label>
            <input class="form-control" id="city" name="city" type="text"
                   value="{{ old('city', $person->address->city ?? '') }}" placeholder="Insira a cidade do aluno..."
                   @readonly($readonly)>
        </div>


        <div class="form-group col-sm-4">

            <label for="cep">CEP:</label>
            <input class="form-control js-cep" name="cep" type="text"
                   value="{{ old('cep'), $person->address->cep ?? '' }}" @readonly($readonly)>

        </div>
    </div>


    {{-- Campos para o Estado e a nacionalidade do aluno --}}
    <div class="form-group">

        <label for="state">Estado:</label>
        <input class="form-control" id="state" name="state" type="text"
               value="{{ old('state'), $person->address->state ?? '' }}" placeholder="Insira o Estado do aluno..."
               @readonly($readonly)>

    </div>

</section>
