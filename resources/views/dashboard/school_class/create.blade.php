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


                <div class="form-row">

                    <div class="form-group col-sm-6">

                        <label for="school_years_year">Ano Letivo:</label>
                        <input class="form-control" id="school_years_year" name="school_years_year" type="text"
                               value="{{ $last_school_year }}">

                    </div>

                </div>

                @foreach ($limiter_school_years as $item)
                    <p>{{ $item->year }}</p>
                @endforeach

                <div class="form-row">

                    <div class="form-group col-sm">

                        <label for="name">Turma:</label>
                        <select class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                autofocus>

                            <option>--------------------</option>
                            <option value="6">6º ano</option>
                            <option value="7">7º ano</option>
                            <option value="8">8º ano</option>
                            <option value="9">9º ano</option>

                        </select>


                        @error('name')
                            <div class="alert alert-danger js-close_alert mt-1">Por favor, selecione uma turma.</div>
                        @enderror

                    </div>


                    <div class="form-group col-sm">

                        <label for="shift">Turno:</label>
                        <select class="form-control" id="shift" name="shift">

                            <option>--------------------</option>
                            <option value="matutino">Matutino</option>
                            <option value="vespertino">Vespertino</option>

                        </select>

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group col-sm">

                        <label for="schooling">Escolaridade:</label>
                        <select class="form-control" id="schooling" name="schooling">

                            <option>--------------------</option>
                            <option value="Fundamental I">Fundamental I</option>
                            <option value="Fundamental II">Fundamental II</option>

                        </select>

                    </div>


                    <div class="form-group col-sm">

                        <label for="room">Sala:</label>
                        <input class="form-control" id="room" name="room" type="text"
                               placeholder="Insira a sala...">

                    </div>

                </div>


                <!-- botões cancelar e cadastrar -->
                <div class="form-row">

                    <div class="col-sm-6 mb-2">

                        <button class="btn btn-danger btn-block" type="reset">
                            <i class="fa-solid fa-trash-can mr-2"></i>
                            Limpar
                        </button>

                    </div>


                    <div class="col-sm-6 mb-2">

                        <button class="btn btn-primary btn-block" type="submit">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>
                            Cadastrar
                        </button>

                    </div>

                </div>
                <!-- ./botões cancelar e cadastrar -->

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
