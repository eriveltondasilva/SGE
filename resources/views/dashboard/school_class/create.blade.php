<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar turmas</x-slot>


    <!-- col do form -->
    <div class="col-sm-6 mx-auto mt-5">

        <section>

            <form class="js-form_school_year" action="{{ route('school_class.create') }}" method="GET">

                <div class="form-row form-group col-sm">

                    <label class="col-form-label mr-2" for="search">Ano Letivo:</label>
                    <div class="mr-2">

                        <select class="form-control js-select_school_year" id="search" name="search">
                            <option></option>
                            @foreach ($limiter_school_years as $item)
                                <option value="{{ $item->year }}" @selected($item->year == $search)>
                                    {{ $item->year }}
                                </option>
                            @endforeach
                        </select>

                    </div>

            </form>

        </section>

        <br>

        @if ($search != null)

            <section>

                <form action="{{ route('school_class.store') }}" method="POST">

                    @csrf


                    {{-- Alerta dos erros de validação --}}
                    <x-alert.error />

                    <x-form.school-class />

                    <x-form.footer />

                </form>

            </section>

            <br>
            <br>

            @if (count($school_classes))
                <section>

                    <!-- table  -->
                    <div class="table-responsive-xl">

                        <table class="table-hover table-sm table">

                            <thead class="thead-light">

                                <tr>
                                    <th scope="col">Turma</th>
                                    <th scope="col">Turno</th>
                                    <th scope="col">Fundamental</th>
                                    <th scope="col">Sala</th>
                                    <th scope="col">Ano Letivo</th>
                                    <th scope="col"></th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($school_classes as $school_class)
                                    <tr>
                                        <td>
                                            {{ $school_class->name }}° ano
                                        </td>

                                        <td>
                                            {{ $school_class->shift }}
                                        </td>

                                        <td>
                                            {{ $school_class->schooling }}
                                        </td>

                                        <td>
                                            {{ $school_class->room }}
                                        </td>

                                        <td>
                                            {{ $school_class->school_year }}
                                        </td>

                                        <td>
                                            <a class="btn btn-sm btn-block btn-primary"
                                               href="{{ route('school_class.show', $school_class) }}"
                                               title="Visualizar professor">
                                                <i class="fa-regular fa-pen-to-square mr-1"></i>
                                                Editar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                    <!-- /.table  -->
                @else
                    <div class="alert alert-danger" role="alert">
                        Não há turmas cadastradas para o ano letivo de {{ $search }}.
                    </div>
                @endif

            </section>

    </div>
    <!-- col do form -->
    @else
        <div class="alert alert-danger" role="alert">
            Nenhum Ano Letivo selecionado. Por favor, selecione acima.
        </div>
    @endif

    <br>
    <br>

</x-dashboard-layout>
