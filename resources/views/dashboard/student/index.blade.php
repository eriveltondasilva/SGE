<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot:head_title>
        Lista de Alunos
        </x-slot>
        <!-- ./browser page title -->

        <!-- Main content -->
        <main class="content">

            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <div class="col-lg-12">

                        <!-- card-outline -->
                        <div class="card card-yellow">

                            <div class="card-header">
                                <h4></h4>
                            </div>

                            <!-- col do form -->
                            <div class="col-sm-10 m-auto pt-5">

                                <div class="table-responsive-xl">

                                    <table class="table-sm table-hover table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Matrícula</th>
                                                <th scope="col">Endereço</th>
                                                <th scope="col">Cidade</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td class="text-center">002</td>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td>Cajueiro</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        title="Visualizar aluno">
                                                        <i class="fa-regular fa-eye mr-1"></i>
                                                        Visualizar
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td class="text-center">005</td>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td>Cajueiro</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        title="Visualizar aluno">
                                                        <i class="fa-regular fa-eye mr-1"></i>
                                                        Visualizar
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td class="text-center">005</td>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td>Cajueiro</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        title="Visualizar aluno">
                                                        <i class="fa-regular fa-eye mr-1"></i>
                                                        Visualizar
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td class="text-center">008</td>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td>Cajueiro </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        title="Visualizar aluno">
                                                        <i class="fa-regular fa-eye mr-1"></i>
                                                        Visualizar
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td class="text-center">010</td>
                                                <td>Mark Mark Mark Mark Mark Mark Mark</td>
                                                <td>Cajueiro</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        title="Visualizar aluno">
                                                        <i class="fa-regular fa-eye mr-1"></i>
                                                        Visualizar
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>

                                </div>

                            </div>
                            <!-- col do form -->

                            <br>
                            <br>
                            <br>

                        </div>
                        <!-- /.card-outline -->

                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </main>
        <!-- /.content -->

</x-dashboard-layout>
