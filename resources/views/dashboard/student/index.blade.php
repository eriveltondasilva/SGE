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

                                <form action="{{ route('student.index') }}" method="GET">
                                    <div class="input-group mb-4">
                                        <input type="search" class="form-control" id="search" name="search"
                                            value="{{ $search }}" autofocus
                                            placeholder="Pesquise matrícula ou nome do aluno...">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                pesquisar
                                            </button>
                                        </div>
                                    </div>
                                </form>


                                @if (count($students))


                                    <!-- table  -->
                                    <div class="table-responsive-xl">

                                        <table class="table-hover table-sm table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Matr.</th>
                                                    <th scope="col">Endereço</th>
                                                    <th scope="col">Cidade</th>
                                                    <th scope="col justify-content-end"></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($students as $student)
                                                    <tr>
                                                        <th scope="row">
                                                            {{ $loop->iteration }}
                                                        </th>
                                                        <td>
                                                            {{ $student->full_name }}
                                                        </td>
                                                        <td>
                                                            {{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}
                                                        </td>
                                                        <td>
                                                            {{ $student->address_street }}
                                                        </td>
                                                        <td>
                                                            {{ $student->address_city }}
                                                        </td>

                                                        <td class="text-right">
                                                            <a href="{{ route('student.show', $student) }}"
                                                                class="btn btn-sm btn-primary" title="Visualizar aluno">
                                                                <i class="fa-regular fa-eye mr-1"></i>
                                                                Visualizar
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>

                                    </div>
                                    <!-- ./table  -->
                                @else
                                    <div class="alert alert-danger pt-3" role="alert">
                                        <h5>Pesquisa não encontrada! Por favor, tente novamene.
                                        </h5>
                                    </div>
                                @endif

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
