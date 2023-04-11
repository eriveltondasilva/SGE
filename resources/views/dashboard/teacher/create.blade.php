<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar professor</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf


            <div class="card-body">

                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                @if (session('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('msg') }}
                        <a href="{{ route('teacher.show', $last_teacher) }}" class="alert-link">
                            Clique aqui
                        </a>
                        para ver o último professor cadastrado.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </button>
                    </div>
                @endif


                <br>
                <h4 class="text-center">Dados Pessoais</h4>


                {{-- Campo para o nome completo do professor --}}
                <div class="form-group">
                    <label for="name">Nome Completo<span class="text-red">*</span>:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" maxlength="100" placeholder="Insira o nome..." autofocus>
                    @error('name')
                        <div class="alert alert-danger js-close-alert mt-1">Por favor, insira o nome do professor.</div>
                    @enderror
                </div>


                {{-- Campos para o RG e CPF do professor --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="rg">RG:</label>
                        <input type="text" class="form-control js-rg" id="rg" name="rg">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control js-cpf" id="cpf" name="cpf">
                    </div>
                </div>


                {{-- Campo para e-mail do professor --}}
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" maxlength="100"
                        placeholder="Insira o e-mail...">
                </div>



                {{-- Campos para lugar de nascimento e data de nascimento do professor --}}
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="telephone">Telefone:</label>
                        <input type="text" class="form-control js-fone" id="telephone" name="telephone">
                    </div>

                    <div class="form-group col-sm">
                        <label for="birth_date">Data de Nasc.:</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date">
                    </div>
                </div>


                {{-- Campo para o sexo do professor --}}
                <label for="male">Sexo:</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="gender_female" name="gender" value="F"
                            checked>
                        <label class="form-check-label" for="gender_female">Feminino</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="gender_male" name="gender" value="M">
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
                        placeholder="Av. São Francisco de Assis, nº 100...">
                </div>


                {{-- Campos para complemento e bairro do endereço do professor --}}
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address_complement">Complemento:</label>
                        <input type="text" class="form-control" id="address_complement" name="address_complement"
                            placeholder="Insira o complemento de endereço...">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="address_neighborhood">Bairro:</label>
                        <input type="text" class="form-control" id="address_neighborhood" name="address_neighborhood"
                            placeholder="Insira o bairro...">
                    </div>
                </div>


                {{-- Campos para a cidade e o CEP --}}
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address_city">Cidade:</label>
                        <input type="text" class="form-control" id="address_city" name="address_city"
                            value="Cajueiro" placeholder="Insira a cidade do professor...">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="address_cep">CEP:</label>
                        <input type="text" class="form-control js-cep" name="address_cep" value="57770-000">
                    </div>
                </div>


                {{-- Campos para o Estado e a nacionalidade do professor --}}
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address_state">Estado:</label>
                        <input type="text" class="form-control" id="address_state" name="address_state"
                            value="Alagoas" placeholder="Insira o Estado do professor...">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="nationality">Nacionalidade:</label>
                        <input type="text" class="form-control" id="nationality" name="nationality"
                            value="Brasileiro(a)" placeholder="Insira a nacionalidade do professor...">
                    </div>
                </div>


                <!-- botões cancelar e cadastrar -->
                <div class="form-row mt-4">
                    <div class="col-sm-6 mb-2">
                        <button type="reset" class="btn btn-danger btn-block">
                            <i class="fa-solid fa-trash-can mr-2"></i>
                            Limpar
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

</x-dashboard-layout>
