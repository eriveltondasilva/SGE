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

                                            <div>
                                                <a href="/students/{{ $student->id }}/editar"
                                                    class="btn btn-sm btn-primary disabled px-4">
                                                    <i class="fa-solid fa-pen-to-square mr-1"></i>
                                                    Editar
                                                </a>
                                            </div>

                                        </div>


                                        <h4 class="text-center">Dados Pessoais</h4>


                                        <div class="form-group">
                                            <label for="full_name">Nome Completo:</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                value="{{ $student->full_name }}">
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rg">RG:</label>
                                                <input type="text" class="form-control" id="rg" name="rg"
                                                    value="{{ $student->rg }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="cpf">CPF:</label>
                                                <input type="text" class="form-control" id="cpf" name="cpf"
                                                    value="{{ $student->cpf }}">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $student->email }}">
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-6 col-sm-7 col-md-8">
                                                <label for="birth_place">Lugar de Nasc:</label>
                                                <input type="text" class="form-control" id="birth_place"
                                                    name="birth_place" value="{{ $student->birth_place }}">
                                            </div>

                                            <div class="form-group col-6 col-sm-5 col-md-4">
                                                <label for="birth_date">Data de Nasc.:</label>
                                                <input type="date" class="form-control" id="birth_date"
                                                    name="birth_date" value="{{ $student->birth_date }}">
                                            </div>
                                        </div>

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

                                        <br>

                                        <div class="form-group">
                                            <label for="responsible_name">Nome do Responsável:</label>
                                            <input type="text" class="form-control" id="kin_name" name="kin_name"
                                                value="{{ $student->kin_name }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="kinship">Parentesco:</label>
                                            <input type="text" class="form-control" id="kin_kinship"
                                                name="kin_kinship" value="{{ $student->kin_kinship }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="full_name">Telefone:</label>
                                            <input type="text" class="form-control" id="kin_telephone"
                                                name="kin_telephone" value="{{ $student->kin_telephone }}">
                                        </div>

                                        <br>
                                        <br>

                                        <h4 class="text-center">Dados de Endereço</h4>

                                        <br>

                                        <div class="form-group">
                                            <label for="street">Endereço:</label>
                                            <input type="text" class="form-control" id="address_street"
                                                name="address_street" value="{{ $student->address_street }}">
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="complement">Complemento:</label>
                                                <input type="text" class="form-control" id="address_complement"
                                                    name="address_complement"
                                                    value="{{ $student->address_complement }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="neighborhood">Bairro:</label>
                                                <input type="text" class="form-control" id="address_neighborhood"
                                                    name="address_neighborhood"
                                                    value="{{ $student->address_neighborhood }}">
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="city">Cidade:</label>
                                                <input type="text" class="form-control" id="address_city"
                                                    name="address_city" value="{{ $student->address_city }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="zip">CEP:</label>
                                                <input type="text" class="form-control" id="address_cep"
                                                    name="address_cep" value="{{ $student->address_cep }}">
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="state">Estado:</label>
                                                <input type="text" class="form-control" id="address_state"
                                                    name="address_state" value="{{ $student->address_state }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="nationality">Nacionalidade:</label>
                                                <input type="text" class="form-control" id="nationality"
                                                    name="nationality" value="{{ $student->nationality }}">
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <h4 class="text-center">Outros Dados</h4>

                                        <br>

                                        <div class="form-group">
                                            <label for="gov_benefits">Benefício do Governo:</label>
                                            <input type="text" class="form-control" id="gov_benefits"
                                                name="gov_benefits" value="{{ $student->gov_benefits }}">
                                        </div>


                                        <div class="form-group">
                                            <label for="health_problem">Problema de Saúde:</label>
                                            <input type="text" class="form-control" id="health_problem"
                                                name="health_problem" value="{{ $student->health_problem }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="note">Observação:</label>
                                            <textarea class="form-control" id="note" name="note" rows="5">{{ $student->note }}</textarea>
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
                                                    Cadastrar
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
