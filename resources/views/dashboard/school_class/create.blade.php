<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar turmas</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-10 m-auto pt-3">

        <div class="card-body">

            <form action="{{ route('school_class.store') }}" method="POST">
                @csrf


                @if (session('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('msg') }}
                        <a href="{{-- {{ route('teacher.show', $last_teacher) } --}}}" class="alert-link">
                            Clique aqui
                        </a>
                        para ver a última turma cadastrada.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </button>
                    </div>
                @endif


                {{-- ! --}}
                <x-alert-error></x-alert-error>


                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="class_name">Nome da Turma:</label>
                        <select class="form-control @error('class_name') is-invalid @enderror" id="class_name"
                                name="class_name" autofocus>
                            <option></option>
                            <option value="6">6º ano</option>
                            <option value="7">7º ano</option>
                            <option value="8">8º ano</option>
                            <option value="9">9º ano</option>
                        </select>
                        @error('class_name')
                            <div class="alert alert-danger js-close-alert mt-1">Por favor, selecione uma turma.</div>
                        @enderror
                    </div>


                    <div class="form-group col-md">
                        <label for="shift">Turno:</label>
                        <select class="form-control" id="shift" name="shift">
                            <option></option>
                            <option value="matutino">Matutino</option>
                            <option value="vespertino">Vespertino</option>
                        </select>
                    </div>

                    <div class="form-group col-md">
                        <label for="schooling">Escolaridade:</label>
                        <select class="form-control" id="schooling" name="schooling">
                            <option></option>
                            <option value="Fundamental I">Fundamental I</option>
                            <option value="Fundamental II">Fundamental II</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="room">Sala:</label>
                        <input type="text" class="form-control" id="room" name="room"
                               placeholder="Insira a sala...">
                    </div>

                    <div class="form-group col-md">
                        <label for="school_years_year">Ano Letivo:</label>
                        <input type="text" class="form-control" id="school_years_year" name="school_years_year"
                               value="{{-- {{ $last_school_year }} --}}" disabled>
                    </div>
                </div>

                <!-- botões cancelar e cadastrar -->
                <div class="form-row">
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
                                        {{ $school_class->class_name }}
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
                                        {{ $school_class->school_years_year }}
                                    </td>

                                    <td>
                                        <a href="{{ route('school_class.show', $school_class) }}"
                                           class="btn btn-sm btn-block btn-primary" title="Visualizar professor">
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

            @endif

        </div>
        <!-- /.card-body -->

    </div>
    <!-- col do form -->

    <br>
    <br>

</x-dashboard-layout>
