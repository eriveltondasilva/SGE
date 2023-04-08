<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Editar Aluno</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <form method="POST" action="{{ route('teacher.update', $teacher) }}">
            @csrf
            @method('PUT')

            <div class="card-body">


                <div class="form-group">

                    <label for="#" class="text-lg">
                        Matrícula:
                        <span class="font-weight-normal badge badge-secondary text-md">
                            {{ str_pad($teacher->id, 3, '0', STR_PAD_LEFT) }}
                        </span>
                    </label>

                    {{-- Botão desativado para editar o cadastro --}}
                    <div>
                        <a href="#" class="btn btn-sm btn-primary disabled px-4">
                            <i class="fa-solid fa-pen-to-square mr-1"></i>
                            Editar
                        </a>
                    </div>

                </div>


                <h4 class="text-center">Dados Pessoais</h4>


                {{-- Campo para o nome completo do professor --}}
                <div class="form-group">
                    <label for="full_name">Nome Completo<span class="text-red">*</span>:</label>
                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name"
                        name="full_name" value="{{ $teacher->full_name }}" placeholder="Insira o nome..." autofocus>
                    @error('full_name')
                        <div class="alert alert-danger js-close-alert mt-1">Por favor, insira o nome do professor.</div>
                    @enderror
                </div>


                {{-- Campos para o RG e CPF do professor --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="rg">RG:</label>
                        <input type="text" class="form-control js-rg" id="rg" name="rg"
                            value="{{ $teacher->rg }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control js-cpf" id="cpf" name="cpf"
                            value="{{ $teacher->cpf }}">
                    </div>
                </div>


                {{-- Campo para e-mail do professor --}}
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $teacher->email }}" placeholder="Insira o e-mail...">
                </div>



                {{-- Campos para lugar de nascimento e data de nascimento do professor --}}
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="telephone">Telefone:</label>
                        <input type="text" class="form-control js-fone" id="telephone" name="telephone"
                            value="{{ $teacher->telephone }}">
                    </div>

                    <div class="form-group col-sm">
                        <label for="birth_date">Data de Nasc.:</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date"
                            value="{{ $teacher->birth_date }}">
                    </div>
                </div>


                {{-- Campo para o sexo do professor --}}
                <label for="male">Sexo:</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="gender_female" name="gender" value="F"
                            @checked($teacher->gender === 'F')>
                        <label class="form-check-label" for="gender_female">Feminino</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="gender_male" name="gender" value="M"
                            @checked($teacher->gender === 'M')>
                        <label class="form-check-label" for="gender_male">Masculino</label>
                    </div>
                </div>


                <br>
                <br>
                <h4 class="text-center">Dados de Endereço</h4>


                {{-- Campo para o endereço do professor --}}
                <div class="form-group">
                    <label for="address_street">Endereço:</label>
                    <input type="text" class="form-control" id="address_street" name="address_street"
                        value="{{ $teacher->address_street }}" placeholder="Av. São Francisco de Assis, nº 100...">
                </div>


                {{-- Campos para complemento e bairro do endereço do professor --}}
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address_complement">Complemento:</label>
                        <input type="text" class="form-control" id="address_complement" name="address_complement"
                            value="{{ $teacher->address_complement }}"
                            placeholder="Insira o complemento de endereço...">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="address_neighborhood">Bairro:</label>
                        <input type="text" class="form-control" id="address_neighborhood"
                            name="address_neighborhood" value="{{ $teacher->address_neighborhood }}"
                            placeholder="Insira o bairro...">
                    </div>
                </div>


                {{-- Campos para a cidade e o CEP --}}
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address_city">Cidade:</label>
                        <input type="text" class="form-control" id="address_city" name="address_city"
                            value="{{ $teacher->address_city }}" placeholder="Insira a cidade do professor...">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="address_cep">CEP:</label>
                        <input type="text" class="form-control js-cep" name="address_cep"
                            value="{{ $teacher->address_cep }}">
                    </div>
                </div>


                {{-- Campos para o Estado e a nacionalidade do professor --}}
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address_state">Estado:</label>
                        <input type="text" class="form-control" id="address_state" name="address_state"
                            value="{{ $teacher->address_state }}" placeholder="Insira o Estado do professor...">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="nationality">Nacionalidade:</label>
                        <input type="text" class="form-control" id="nationality" name="nationality"
                            value="{{ $teacher->nationality }}" placeholder="Insira a nacionalidade do professor...">
                    </div>
                </div>


                <!-- botões cancelar e atualizar -->
                <div class="form-row mt-4">
                    <div class="col-sm-6 mb-2">
                        <button type="reset" class="btn btn-danger btn-block">
                            <i class="fa-solid fa-trash-can mr-2"></i>
                            Restaurar
                        </button>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>
                            Atualizar
                        </button>
                    </div>
                </div>
                <!-- ./botões cancelar e cadastrar -->

            </div>
            <!-- /.card-body -->

        </form>

    </div>
    <!-- col do form -->

    <br>
    <br>

</x-dashboard-layout>
