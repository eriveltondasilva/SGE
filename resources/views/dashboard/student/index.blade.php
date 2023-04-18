<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Lista de Alunos</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-10 mx-auto">

        <form action="{{ route('student.index') }}" method="GET">
            <div class="input-group mb-4">
                <input class="form-control" id="search" name="search" type="search" value="{{ $search }}"
                       autofocus placeholder="Pesquise matrícula ou nome do aluno...">

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        pesquisar
                    </button>
                </div>
            </div>
        </form>


        @if ($students)


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
                                    {{ $student->name }}
                                </td>
                                <td>
                                    {{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}
                                </td>
                                <td>
                                    {{-- {{ student }} --}}
                                </td>
                                <td>
                                    {{-- {{ student }} --}}
                                </td>

                                <td class="text-right">
                                    <a class="btn btn-sm btn-primary" href="{{ route('student.show', $student) }}"
                                       title="Visualizar aluno">
                                        <i class="fa-regular fa-eye mr-1"></i>
                                        Visualizar
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @if (count($students) > 1)
                            {{ $students->links() }}
                        @endif

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
    <!-- /.col do form -->

    <br>
    <br>

</x-dashboard-layout>
