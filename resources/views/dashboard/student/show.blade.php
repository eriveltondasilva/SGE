<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Visualizar Aluno</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <div class="card-body">

            {{-- Componente para retornar mensage: "cadastro atualizado com sucesso!" --}}
            @if (session('msg'))
                <div class="alert alert-info alert-dismissible fade show js-close-alert" role="alert">
                    {{ session('msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </span>
                    </button>
                </div>
            @endif


            <div class="form-group">
                <label for="#" class="text-lg">
                    Matrícula:
                    <span class="font-weight-normal badge badge-secondary text-md">
                        {{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}
                    </span>
                </label>

                {{-- Botão para editar o cadastro --}}
                <div>
                    <a href="{{ route('student.edit', $student) }}" class="btn btn-sm btn-primary px-4">
                        <i class="fa-solid fa-pen-to-square mr-1"></i>
                        Editar
                    </a>
                </div>
            </div>


            <h4 class="text-center">Dados Pessoais</h4>


            {{-- Campo para o nome completo do aluno --}}
            <div class="form-group">
                <label for="name">Nome Completo:</label>
                <input type="text" class="form-control" id="name" value="{{ $student->name }}" readonly>
            </div>


            {{-- Campos para o RG e CPF do aluno --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" id="rg" value="{{ $student->rg }}" readonly>
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" value="{{ $student->cpf }}" readonly>
                </div>
            </div>


            {{-- Campo para e-mail do aluno --}}
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" value="{{ $student->email }}" readonly>
            </div>


            {{-- Campos para lugar de nascimento e data de nascimento do aluno --}}
            <div class="form-row">
                <div class="form-group col-6 col-sm-7 col-md-8">
                    <label for="birth_place">Lugar de Nasc:</label>
                    <input type="text" class="form-control" id="birth_place" value="{{ $student->birth_place }}"
                           readonly>
                </div>

                <div class="form-group col-6 col-sm-5 col-md-4">
                    <label for="birth_date">Data de Nasc.:</label>
                    <input type="date" class="form-control" id="birth_date" value="{{ $student->birth_date }}"
                           readonly>
                </div>
            </div>


            {{-- Campo para o sexo do aluno --}}
            <label for="male">Sexo:</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="gender_female" name="gender"
                           @checked($student->gender === 'F') @disabled($student->gender !== 'F')>
                    <label class="form-check-label" for="gender_female">Feminino</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="gender_male" name="gender"
                           @checked($student->gender === 'M') @disabled($student->gender !== 'M')>
                    <label class="form-check-label" for="gender_male">Masculino</label>
                </div>
            </div>


            <br>
            <br>
            <h4 class="text-center">Dados Pessoais do Responsável</h4>


            {{-- Campo para nome do responsável pelo aluno --}}
            <div class="form-group">
                <label for="kin_name">Nome do Responsável:</label>
                <input type="text" class="form-control" id="kin_name" value="" readonly>
            </div>


            {{-- Campo para o parentesco e o telefone do responsável --}}
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="kin_kinship">Parentesco:</label>
                    <input type="text" class="form-control" id="kin_kinship" value="" readonly>
                </div>

                <div class="form-group col-md">
                    <label for="kin_telephone">Telefone:</label>
                    <input type="text" class="form-control" id="kin_telephone" value="" readonly>
                </div>
            </div>


            <br>
            <br>
            <h4 class="text-center">Dados de Endereço</h4>


            {{-- Campo para o endereço do aluno --}}
            <div class="form-group">
                <label for="address_street">Endereço:</label>
                <input type="text" class="form-control" id="address_street" value="" readonly>
            </div>


            {{-- Campos para complemento e bairro do endereço do aluno --}}
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="address_complement">Complemento:</label>
                    <input type="text" class="form-control" id="address_complement" value="" readonly>
                </div>

                <div class="form-group col-md-4">
                    <label for="address_neighborhood">Bairro:</label>
                    <input type="text" class="form-control" id="address_neighborhood" value="" readonly>
                </div>
            </div>


            {{-- Campos para a cidade e o CEP --}}
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="address_city">Cidade:</label>
                    <input type="text" class="form-control" id="address_city" value="" readonly>
                </div>

                <div class="form-group col-md-4">
                    <label for="address_cep">CEP:</label>
                    <input type="text" class="form-control" id="address_cep" value="" readonly>
                </div>
            </div>

            {{-- Campos para o Estado e a nacionalidade do aluno --}}
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="address_state">Estado:</label>
                    <input type="text" class="form-control" id="address_state" value="" readonly>
                </div>

                <div class="form-group col-md-4">
                    <label for="nationality">Nacionalidade:</label>
                    <input type="text" class="form-control" id="nationality" value="{{ $student->nationality }}"
                           readonly>
                </div>
            </div>


            <br>
            <br>
            <h4 class="text-center">Outros Dados</h4>


            {{-- Campo para benefícios de governo --}}
            <div class="form-group">
                <label for="gov_benefits">Benefício do Governo:</label>
                <input type="text" class="form-control" id="gov_benefits" value="{{ $student->gov_benefits }}"
                       readonly>
            </div>


            {{-- Campo para colocar problemas de saúde do aluno --}}
            <div class="form-group">
                <label for="health_problem">Problema de Saúde:</label>
                <input type="text" class="form-control" id="health_problem"
                       value="{{ $student->health_problem }}" readonly>
            </div>


            {{-- Campo para as observações referentes ao aluno --}}
            <div class="form-group">
                <label for="note">Observação:</label>
                <textarea class="form-control text-justify" id="note" rows="5" readonly>{{ $student->note }}</textarea>
            </div>

        </div>
        <!-- /.card-body -->

    </div>
    <!-- col do form -->

    <br>
    <br>

</x-dashboard-layout>
