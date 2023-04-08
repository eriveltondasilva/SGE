<x-dashboard-layout>


    <!-- browser page title -->
    <x-slot:head_title>
        Cadastrar turmas
        </x-slot>
        <!-- ./browser page title -->


        <!-- Main content -->
        <main class="content">

            <!-- container-fluid -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-lg-12">

                        <!-- card-outline -->
                        <div class="card card-yellow">

                            <div class="card-header">
                                <h4></h4>
                            </div>

                            <!-- col do form -->
                            <div class="col-sm-8 m-auto pt-3">

                                <form>

                                    <div class="card-body">

                                        <div class="form-row">
                                            <div class="form-group col-md">
                                                <label for="class_name">Nome da Turma:</label>
                                                <select class="form-control" id="class_name" name="class_name">
                                                    <option>6º ano</option>
                                                    <option>7º ano</option>
                                                    <option>8º ano</option>
                                                    <option>9º ano</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md">
                                                <label for="shift">Turno:</label>
                                                <select class="form-control" id="shift" name="shift">
                                                    <option>Matutino</option>
                                                    <option selected>Vespertino</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md">
                                                <label for="schooling">Escolaridade:</label>
                                                <input type="text" class="form-control" id="schooling"
                                                    name="schooling" placeholder="Insira a Escolaridade..."
                                                    value="Fundamental II">
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
                                                <input type="text" class="form-control" id="school_years_year"
                                                    name="school_years_year" value="">
                                            </div>
                                        </div>

                                        <!-- botões cancelar e cadastrar -->
                                        <div class="form-row mt-4">
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

                                        <br>

                                        @if (count($school_classes))

                                            <!-- table  -->
                                            <div class="table-responsive-xl">

                                                <table class="table-hover table-sm table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">#</th>
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
                                                                <th scope="row">
                                                                    {{ $loop->iteration }}
                                                                </th>

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
                                                                        class="btn btn-sm btn-block btn-primary"
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

                                        @endif



                                    </div>
                                    <!-- /.card-body -->

                                </form>

                            </div>
                            <!-- col do form -->

                            <br>
                            <br>
                            <br>

                        </div>
                        <!-- /.card-yellow -->

                    </div>
                    <!-- /.col-lg-12 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </main>
        <!-- /.content -->

</x-dashboard-layout>
