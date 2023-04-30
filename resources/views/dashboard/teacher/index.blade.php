<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Lista de Professores</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-10 mx-auto mt-5">

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
                                    {{ Str::padLeft($teacher->id, 3, '0') }}
                                </td>

                                <td title="{{ $teacher->address->street ?? '' }}">
                                    {{ Str::words($teacher->address->street ?? '', 3, '...') }}
                                </td>

                                <td title="{{ $teacher->address->city ?? '' }}">
                                    {{ Str::words($teacher->address->city ?? '', 3, '...') }}
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
            {{-- alerta para quando a pesquisar não for encontrada --}}
            <x-alert.not-found />
        @endif

    </div>
    <!-- ./col -->

    <br>
    <br>

</x-dashboard-layout>
