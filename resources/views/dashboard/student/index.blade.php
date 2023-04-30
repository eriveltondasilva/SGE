<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Lista de Alunos</x-slot>
    <!-- ./browser page title -->


    <!-- campo para pesquisa -->
    <div class="col-sm-10 mx-auto mt-5">

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

        {{-- ! --}}
        {{-- Paginação --}}
        {{--
        <nav class="mb-0" aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        --}}

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
                                    {{ $student->name }}
                                </td>
                                <td>
                                    {{ Str::padLeft($student->id, 3, '0') }}
                                </td>
                                <td title="{{ $student->address->street ?? '' }}">
                                    {{ Str::words($student->address->street ?? '', 3, '...') }}
                                </td>
                                <td title="{{ $student->address->city ?? '' }}">
                                    {{ Str::words($student->address->city ?? '', 3, '...') }}
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

                    </tbody>

                </table>

            </div>
            <!-- ./table  -->
        @else
            {{-- alerta para quando a pesquisar não for encontrada --}}
            <x-alert.not-found />

        @endif

    </div>
    <!-- /.col do form -->


    <br>
    <br>

</x-dashboard-layout>
