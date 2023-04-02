<x-dashboard-layout>


    <!-- browser page title -->
    <x-slot:head_title>
        Cadastrar turmas
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
                                        {{-- <h4 class="text-center">Turma</h4> --}}


                                        <div class="form-row">
                                            <div class="form-group col-md">
                                                <label for="class_name">Nome da Turma:</label>
                                                <select class="form-control" id="class_name">
                                                    <option>6º ano</option>
                                                    <option>7º ano</option>
                                                    <option>8º ano</option>
                                                    <option>9º ano</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md">
                                                <label for="shift">Turno:</label>
                                                <select class="form-control" id="shift">
                                                    <option>Matutino</option>
                                                    <option selected>Vespertino</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md">
                                                <label for="schooling">Escolaridade:</label>
                                                <input type="text" class="form-control" id="schooling"
                                                    placeholder="Insira a Escolaridade..." value="Fundamental II">
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
