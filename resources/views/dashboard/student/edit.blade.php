<x-dashboard-layout>


    <!-- browser page title -->
    <x-slot:head_title>
        Editar Aluno
        </x-slot>
        <!-- ./browser page title -->


        <!-- Main content -->
        <main class="content">

            <!-- container-fluid -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-lg-12">

                        <!-- card-outline -->
                        <div class="card card-yellow">

                            <div class="card-header">
                                <h4></h4>
                            </div>

                            <!-- col do form -->
                            <div class="col-sm-8 m-auto pt-3">

                                <form method="POST" action="{{ route('student.update', $student) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="card-body">


                                        <div class="form-group">

                                            <label for="#" class="text-lg">
                                                Matrícula:
                                                <span class="font-weight-normal badge badge-secondary text-md">
                                                    {{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}
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


                                        {{-- Campo para o nome completo do aluno --}}
                                        <div class="form-group">
                                            <label for="full_name">Nome Completo:</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                value="{{ $student->full_name }}" placeholder="Insira o nome...">
                                        </div>


                                        {{-- Campos para o RG e CPF do aluno --}}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rg">RG:</label>
                                                <input type="text" class="form-control js-rg" id="rg"
                                                    name="rg" value="{{ $student->rg }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="cpf">CPF:</label>
                                                <input type="text" class="form-control js-cpf" id="cpf"
                                                    name="cpf" value="{{ $student->cpf }}">
                                            </div>
                                        </div>


                                        {{-- Campo para e-mail do aluno --}}
                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $student->email }}" placeholder="Insira o e-mail...">
                                        </div>


                                        {{-- Campos para lugar de nascimento e data de nascimento do aluno --}}
                                        <div class="form-row">
                                            <div class="form-group col-6 col-sm-7 col-md-8">
                                                <label for="birth_place">Lugar de Nasc:</label>
                                                <input type="text" class="form-control" id="birth_place"
                                                    name="birth_place" value="{{ $student->birth_place }}"
                                                    placeholder="Insira o local de nascimento...">
                                            </div>

                                            <div class="form-group col-6 col-sm-5 col-md-4">
                                                <label for="birth_date">Data de Nasc.:</label>
                                                <input type="date" class="form-control" id="birth_date"
                                                    name="birth_date" value="{{ $student->birth_date }}">
                                            </div>
                                        </div>


                                        {{-- Campo para o sexo do aluno --}}
                                        <label for="male">Sexo:</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="gender_female"
                                                    name="gender" value="F" @checked($student->gender === 'F')>
                                                <label class="form-check-label" for="gender_female">Feminino</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="gender_male"
                                                    name="gender" value="M" @checked($student->gender === 'M')>
                                                <label class="form-check-label" for="gender_male">Masculino</label>
                                            </div>
                                        </div>


                                        <br>
                                        <br>
                                        <h4 class="text-center">Dados Pessoais do Responsável</h4>


                                        {{-- Campo para nome do responsável pelo aluno --}}
                                        <div class="form-group">
                                            <label for="kin_name">Nome do Responsável:</label>
                                            <input type="text" class="form-control" id="kin_name" name="kin_name"
                                                value="{{ $student->kin_name }}"
                                                placeholder="Insira o nome do responsável...">
                                        </div>


                                        {{-- Campo para o parentesco e o telefone do responsável --}}
                                        <div class="form-row">
                                            <div class="form-group col-md">
                                                <label for="kin_kinship">Parentesco:</label>
                                                <input list="kinship" class="form-control" id="kin_kinship"
                                                    name="kin_kinship" value="{{ $student->kin_kinship }}"
                                                    placeholder="Insira o parentesco do responsável...">
                                                <datalist id="kinship">
                                                    <option value="Mãe">
                                                    <option value="Pai">
                                                    <option value="Tia">
                                                    <option value="Tio">
                                                    <option value="Avó">
                                                    <option value="Avô">
                                                </datalist>
                                            </div>

                                            <div class="form-group col-md">
                                                <label for="kin_telephone">Telefone:</label>
                                                <input type="text" class="form-control js-fone" id="kin_telephone"
                                                    value="{{ $student->kin_telephone }}">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <h4 class="text-center">Dados de Endereço</h4>


                                    {{-- Campo para o endereço do aluno --}}
                                    <div class="form-group">
                                        <label for="address_street">Endereço:</label>
                                        <input type="text" class="form-control" id="address_street"
                                            name="address_street" value="{{ $student->address_street }}"
                                            placeholder="Av. São Francisco de Assis, nº 100...">
                                    </div>


                                    {{-- Campos para complemento e bairro do endereço do aluno --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address_complement">Complemento:</label>
                                            <input type="text" class="form-control" id="address_complement"
                                                name="address_complement" value="{{ $student->address_complement }}"
                                                placeholder="Insira o complemento de endereço...">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="address_neighborhood">Bairro:</label>
                                            <input type="text" class="form-control" id="address_neighborhood"
                                                name="address_neighborhood"
                                                value="{{ $student->address_neighborhood }}"
                                                placeholder="Insira o bairro...">
                                        </div>
                                    </div>

                                    {{-- Campos para a cidade e o CEP --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address_city">Cidade:</label>
                                            <input type="text" class="form-control" id="address_city"
                                                name="address_city" value="{{ $student->address_city }}"
                                                placeholder="Insira a cidade do aluno...">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="address_cep">CEP:</label>
                                            <input type="text" class="form-control js-cep" id="address_cep"
                                                name="address_cep" value="{{ $student->address_cep }}">
                                        </div>
                                    </div>


                                    {{-- Campos para o Estado e a nacionalidade do aluno --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address_state">Estado:</label>
                                            <input type="text" class="form-control" id="address_state"
                                                name="address_state" value="{{ $student->address_state }}"
                                                placeholder="Insira o Estado do aluno...">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="nationality">Nacionalidade:</label>
                                            <input type="text" class="form-control" id="nationality"
                                                name="nationality" value="{{ $student->nationality }}"
                                                placeholder="Insira a nacionalidade do aluno...">
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <h4 class="text-center">Outros Dados</h4>


                                    {{-- Campo para benefícios de governo --}}
                                    <div class="form-group">
                                        <label for="gov_benefits">Benefício do Governo:</label>
                                        <input type="text" class="form-control" id="gov_benefits"
                                            name="gov_benefits" value="{{ $student->gov_benefits }}"
                                            placeholder="Insira benefícios do governo...">
                                    </div>


                                    {{-- Campo para colocar problemas de saúde do aluno --}}
                                    <div class="form-group">
                                        <label for="health_problem">Problema de Saúde:</label>
                                        <input type="text" class="form-control" id="health_problem"
                                            name="health_problem" value="{{ $student->health_problem }}"
                                            placeholder="Insira problemas de saúde pertencentes ao aluno...">
                                    </div>


                                    {{-- Campo para as observações referentes ao aluno --}}
                                    <div class="form-group">
                                        <label for="note">Observação:</label>
                                        <textarea class="form-control" id="note" name="note" rows="5"
                                            placeholder="Insira alguma observação sobre o aluno...">{{ $student->note }}</textarea>
                                    </div>


                                    <!-- botões cancelar e cadastrar -->
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
                        <br>

                    </div>
                    <!-- ./card-outline -->

                </div>
                <!-- ./col -->

            </div>
            <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </main>
        <!-- /.content -->

</x-dashboard-layout>
