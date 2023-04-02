<x-dashboard-layout>


    <!-- browser page title -->
    <x-slot:head_title>
        Visualizar Aluno(a)
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
                                {{-- <h3 class="card-title text-center"></h3> --}}
                            </div>

                            <!-- col do form -->
                            <div class="col-sm-8 m-auto pt-3">

                                <form>

                                    <div class="card-body">

                                        <h4 class="text-center">Dados Pessoais{{ $student->ful_name }}
                                        </h4>

                                        <br>

                                        <div class="form-group">
                                            <label for="full_name">Nome Completo <span
                                                    class="text-red">*</span>:</label>
                                            <input type="text" class="form-control" id="full_name" maxlength="100"
                                                placeholder="Insira o nome..." value="" required>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rg">RG:</label>
                                                <input type="text" class="form-control" id="rg"
                                                    title="Formato correto do RG é: 00.000.000-0" maxlength="12"
                                                    pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}"
                                                    placeholder="00.000.000-0">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="cpf">CPF:</label>
                                                <input type="text" class="form-control" id="cpf"
                                                    title="Formato correto do CFP é: 000.000.000-00" maxlength="14"
                                                    pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
                                                    placeholder="000.000.000-00">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="form-control" id="email" maxlength="100"
                                                placeholder="Insira o e-mail...">
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-6 col-sm-7 col-md-8">
                                                <label for="birth_place">Lugar de Nasc:</label>
                                                <input type="text" class="form-control" id="birth_place"
                                                    maxlength="50" placeholder="Local de nascimento...">
                                            </div>

                                            <div class="form-group col-6 col-sm-5 col-md-4">
                                                <label for="birth_date">Data de Nasc.:</label>
                                                <input type="date" class="form-control" id="birth_date">
                                            </div>
                                        </div>

                                        <label for="male">Sexo:</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gender_female" value="F" checked>
                                                <label class="form-check-label" for="gender_female">Feminino</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gender_male" value="M">
                                                <label class="form-check-label" for="gender_male">Masculino</label>
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <h4 class="text-center">Dados Pessoais do Responsável</h4>

                                        <br>

                                        <div class="form-group">
                                            <label for="responsible_name">Nome do Responsável:</label>
                                            <input type="text" class="form-control" id="full_name" maxlength="100"
                                                placeholder="Insira o nome...">
                                        </div>

                                        <div class="form-group">
                                            <label for="kinship">Parentesco:</label>
                                            <input type="text" class="form-control" id="kinship"
                                                placeholder="Insira parentesco...">
                                        </div>

                                        <div class="form-group">
                                            <label for="full_name">Telefone:</label>
                                            <input type="text" class="form-control" id="full_name" maxlength="16"
                                                placeholder="(82) 9 9999-9999">
                                        </div>

                                        <br>
                                        <br>
                                        <br>

                                        <h4 class="text-center">Dados de Endereço</h4>

                                        <br>

                                        <div class="form-group">
                                            <label for="street">Endereço:</label>
                                            <input type="text" class="form-control" id="street"
                                                placeholder="Av. São Francisco de Assis, nº 100...">
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="complement">Complemento:</label>
                                                <input type="text" class="form-control" id="complement"
                                                    placeholder="Insira o complemento de endereço...">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="neighborhood">Bairro:</label>
                                                <input type="text" class="form-control" id="neighborhood"
                                                    placeholder="Insira o bairro...">
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="city">Cidade:</label>
                                                <input type="text" class="form-control" id="city"
                                                    placeholder="Insira a cidade...">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="zip">CEP:</label>
                                                <input type="text" class="form-control" id="city"
                                                    maxlength="10" pattern="[0-9]{1}.[0-9]{4}-[0-9]{3}"
                                                    placeholder="0.000-000">
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="state">Estado:</label>
                                                <input type="text" class="form-control" id="state"
                                                    placeholder="Insira o Estado..." value="Alagoas">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="nationality">Nacionalidade:</label>
                                                <input type="text" class="form-control" id="nationality"
                                                    placeholder="Insira a nacionalidade..." value="Brasileiro(a)">
                                            </div>
                                        </div>

                                        <br>
                                        <br>
                                        <br>

                                        <h4 class="text-center">Outros Dados</h4>

                                        <br>

                                        <div class="form-group">
                                            <label for="gov_benefits">Benefício do Governo:</label>
                                            <input type="text" class="form-control" id="gov_benefits"
                                                placeholder="Insira benefícios do governo...">
                                        </div>


                                        <div class="form-group">
                                            <label for="health_problem">Problema de Saúde:</label>
                                            <input type="text" class="form-control" id="health_problem"
                                                placeholder="Insira problemas de saúde pertencentes ao(a) aluno(a)...">
                                        </div>

                                        <div class="form-group">
                                            <label for="note">Observação:</label>
                                            <textarea class="form-control" id="note" rows="3"
                                                placeholder="Insira alguma observação sobre o(a) aluno(a)..."></textarea>
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
