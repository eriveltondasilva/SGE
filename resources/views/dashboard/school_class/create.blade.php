<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar turmas</x-slot>


    <!-- col do form -->
    <div class="col-sm-6 mx-auto">

        <div class="card-body">

            <form action="{{ route('school_class.store') }}" method="POST">

                @csrf


                {{-- Alerta dos erros de validação --}}
                <x-alert.error />

                <x-form.school-class />

                <x-form.footer />

            </form>


            <br>
            <br>


            @if (count($school_classes))
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
                <div class="alert alert-danger">
                    Não há turmas cadastradas para o ano letivo de {{ $last_school_year }}.
                </div>
            @endif

        </div>
        <!-- /.card-body -->

    </div>
    <!-- col do form -->


    <br>
    <br>

</x-dashboard-layout>
