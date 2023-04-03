<x-dashboard-layout>


    <!-- browser page title -->
    <x-slot:head_title>
        Visualizar Aluno
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

                                <div class="card-body">


                                    <div class="form-group">

                                        <label for="#" class="text-lg">
                                            Matrícula:
                                            <span class="font-weight-normal badge badge-secondary text-md">
                                                {{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </label>

                                        <div>
                                            <a href="{{ route('student.edit', $student) }}"
                                                class="btn btn-sm btn-primary px-4">
                                                <i class="fa-solid fa-pen-to-square mr-1"></i>
                                                Editar
                                            </a>
                                        </div>

                                    </div>


                                    <h4 class="text-center">Dados Pessoais</h4>


                                    <div class="form-group">
                                        <label for="full_name">Nome Completo:</label>
                                        <input type="text" class="form-control" id="full_name"
                                            value="{{ $student->full_name }}" readonly>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="rg">RG:</label>
                                            <input type="text" class="form-control" id="rg"
                                                value="{{ $student->rg }}" readonly>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="cpf">CPF:</label>
                                            <input type="text" class="form-control" id="cpf"
                                                value="{{ $student->cpf }}" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="email" class="form-control" id="email"
                                            value="{{ $student->email }}" readonly>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-6 col-sm-7 col-md-8">
                                            <label for="birth_place">Lugar de Nasc:</label>
                                            <input type="text" class="form-control" id="birth_place"
                                                value="{{ $student->birth_place }}" readonly>
                                        </div>

                                        <div class="form-group col-6 col-sm-5 col-md-4">
                                            <label for="birth_date">Data de Nasc.:</label>
                                            <input type="date" class="form-control" id="birth_date"
                                                value="{{ $student->birth_date }}" readonly>
                                        </div>
                                    </div>

                                    <label for="male">Sexo:</label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gender_female" @checked($student->gender === 'F')
                                                @disabled($student->gender !== 'F')>
                                            <label class="form-check-label" for="gender_female">Feminino</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gender_male" @checked($student->gender === 'M')
                                                @disabled($student->gender !== 'M')>
                                            <label class="form-check-label" for="gender_male">Masculino</label>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <h4 class="text-center">Dados Pessoais do Responsável</h4>


                                    <div class="form-group">
                                        <label for="responsible_name">Nome do Responsável:</label>
                                        <input type="text" class="form-control" id="kin_name"
                                            value="{{ $student->kin_name }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="kinship">Parentesco:</label>
                                        <input type="text" class="form-control" id="kin_kinship"
                                            value="{{ $student->kin_kinship }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="full_name">Telefone:</label>
                                        <input type="text" class="form-control" id="kin_telephone"
                                            value="{{ $student->kin_telephone }}" readonly>
                                    </div>


                                    <br>
                                    <br>
                                    <h4 class="text-center">Dados de Endereço</h4>


                                    <div class="form-group">
                                        <label for="street">Endereço:</label>
                                        <input type="text" class="form-control" id="address_street"
                                            value="{{ $student->address_street }}" readonly>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="complement">Complemento:</label>
                                            <input type="text" class="form-control" id="address_complement"
                                                value="{{ $student->address_complement }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="neighborhood">Bairro:</label>
                                            <input type="text" class="form-control" id="address_neighborhood"
                                                value="{{ $student->address_neighborhood }}" readonly>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="city">Cidade:</label>
                                            <input type="text" class="form-control" id="address_city"
                                                value="{{ $student->address_city }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="zip">CEP:</label>
                                            <input type="text" class="form-control" id="address_cep"
                                                value="{{ $student->address_cep }}" readonly>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="state">Estado:</label>
                                            <input type="text" class="form-control" id="address_state"
                                                value="{{ $student->address_state }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="nationality">Nacionalidade:</label>
                                            <input type="text" class="form-control" id="nationality"
                                                value="{{ $student->nationality }}" readonly>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <h4 class="text-center">Outros Dados</h4>


                                    <div class="form-group">
                                        <label for="gov_benefits">Benefício do Governo:</label>
                                        <input type="text" class="form-control" id="gov_benefits"
                                            value="{{ $student->gov_benefits }}" readonly>
                                    </div>


                                    <div class="form-group">
                                        <label for="health_problem">Problema de Saúde:</label>
                                        <input type="text" class="form-control" id="health_problem"
                                            value="{{ $student->health_problem }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="note">Observação:</label>
                                        <textarea class="form-control" id="note" rows="5" readonly>{{ $student->note }}</textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->

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
