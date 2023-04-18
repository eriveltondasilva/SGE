<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Lista de Professores</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-10 mx-auto">

        <form action="{{ route('teacher.index') }}" method="GET">
            <div class="input-group mb-4">
                <input class="form-control" id="search" name="search" type="search" value="{{ $search }}"
                       autofocus placeholder="Pesquise matrícula ou nome do professor...">

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        pesquisar
                    </button>
                </div>
            </div>
        </form>


        @if (count($teachers))


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
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($teachers as $teacher)
                            <tr>
                                <th scope="row">
                                    {{ $loop->iteration }}
                                </th>

                                <td>
                                    {{ $teacher->name }}
                                </td>

                                <td>
                                    {{ str_pad($teacher->id, 3, '0', STR_PAD_LEFT) }}
                                </td>

                                <td>
                                    {{ $teacher->address_street }}
                                </td>

                                <td>
                                    {{ $teacher->address_city }}
                                </td>

                                <td class="text-right">
                                    <a class="btn btn-sm btn-primary" href="{{ route('teacher.show', $teacher) }}"
                                       title="Visualizar professor">
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
    <!-- ./col -->

    <br>
    <br>

</x-dashboard-layout>
