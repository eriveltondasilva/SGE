<x-dashboard-layout>


    <!-- browser page title -->
    <x-slot:head_title>
        Visualizar Professor
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

                            {{-- Código para deixar uma linha grossa no início das páginas  --}}
                            <div class="card-header">
                                <h5></h5>
                            </div>

                            <!-- col do form -->
                            <div class="col-sm-8 m-auto pt-3">

                                <div class="card-body">


                                    {{-- Componente para retornar mensage: "cadastro atualizado com sucesso!" --}}
                                    @if (session('msg'))
                                        <div class="alert alert-info alert-dismissible fade show js-close-alert"
                                            role="alert">
                                            {{ session('msg') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
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
                                                {{ str_pad($teacher->id, 3, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </label>

                                        {{-- Botão para editar o cadastro --}}
                                        <div>
                                            <a href="{{ route('teacher.edit', $teacher) }}"
                                                class="btn btn-sm btn-primary px-4">
                                                <i class="fa-solid fa-pen-to-square mr-1"></i>
                                                Editar
                                            </a>
                                        </div>
                                    </div>


                                    <h4 class="text-center">Dados Pessoais</h4>


                                    {{-- Campo para o nome completo do professor --}}
                                    <div class="form-group">
                                        <label for="full_name">Nome Completo<span class="text-red">*</span>:</label>
                                        <input type="text" class="form-control" id="full_name"
                                            value="{{ $teacher->full_name }}" readonly>
                                    </div>


                                    {{-- Campos para o RG e CPF do professor --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="rg">RG:</label>
                                            <input type="text" class="form-control" id="rg"
                                                value="{{ $teacher->rg }}" readonly>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="cpf">CPF:</label>
                                            <input type="text" class="form-control" id="cpf"
                                                value="{{ $teacher->cpf }}" readonly>
                                        </div>
                                    </div>


                                    {{-- Campo para e-mail do professor --}}
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="email" class="form-control" id="email"
                                            value="{{ $teacher->email }}" readonly>
                                    </div>



                                    {{-- Campos para lugar de nascimento e data de nascimento do professor --}}
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="telephone">Telefone:</label>
                                            <input type="text" class="form-control" id="telephone"
                                                value="{{ $teacher->telephone }}" readonly>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label for="birth_date">Data de Nasc.:</label>
                                            <input type="date" class="form-control" id="birth_date"
                                                value="{{ $teacher->birth_date }}" readonly>
                                        </div>
                                    </div>


                                    {{-- Campo para o sexo do professor --}}
                                    <label for="male">Sexo:</label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="gender_female"
                                                name="gender" @checked($teacher->gender === 'F')
                                                @disabled($teacher->gender !== 'F')>
                                            <label class="form-check-label" for="gender_female">Feminino</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="gender_male"
                                                name="gender" @checked($teacher->gender === 'M')
                                                @disabled($teacher->gender !== 'M')>
                                            <label class="form-check-label" for="gender_male">Masculino</label>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <h4 class="text-center">Dados de Endereço</h4>


                                    {{-- Campo para o endereço do professor --}}
                                    <div class="form-group">
                                        <label for="address_street">Endereço:</label>
                                        <input type="text" class="form-control" id="address_street"
                                            value="{{ $teacher->address_street }}" readonly>
                                    </div>


                                    {{-- Campos para complemento e bairro do endereço do professor --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address_complement">Complemento:</label>
                                            <input type="text" class="form-control" id="address_complement"
                                                value="{{ $teacher->address_complement }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="address_neighborhood">Bairro:</label>
                                            <input type="text" class="form-control" id="address_neighborhood"
                                                value="{{ $teacher->address_neighborhood }}" readonly>
                                        </div>
                                    </div>


                                    {{-- Campos para a cidade e o CEP --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address_city">Cidade:</label>
                                            <input type="text" class="form-control" id="address_city"
                                                value="{{ $teacher->address_city }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="address_cep">CEP:</label>
                                            <input type="text" class="form-control"
                                                value="{{ $teacher->address_cep }}" readonly>
                                        </div>
                                    </div>


                                    {{-- Campos para o Estado e a nacionalidade do professor --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address_state">Estado:</label>
                                            <input type="text" class="form-control" id="address_state"
                                                value="{{ $teacher->address_state }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="nationality">Nacionalidade:</label>
                                            <input type="text" class="form-control" id="nationality"
                                                value="{{ $teacher->nationality }}" readonly>
                                        </div>
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
