<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Editar Aluno</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <form method="POST" action="{{ route('student.update', $student) }}">
            @csrf
            @method('PUT')


            <div class="card-body">

                <div class="form-group">

                    <label class="text-lg" for="#">
                        Matrícula:
                        <span class="font-weight-normal badge badge-secondary text-md">
                            {{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}
                        </span>
                    </label>


                    {{-- Botão desativado para editar o cadastro --}}
                    <div>

                        <a class="btn btn-sm btn-primary disabled px-4" href="#">
                            <i class="fa-solid fa-pen-to-square mr-1"></i>
                            Editar
                        </a>

                    </div>

                </div>


                {{-- Dados pessoais --}}
                <x-form.personal-data :person="$student" />


                {{-- Dados do responsáveis --}}
                <x-form.relative-data />


                {{-- Dados do endereço --}}
                <x-form.address />


                {{-- Outros datos --}}
                <x-form.other-data :person="$student" />


                {{-- Botões: cancelar e cadastrar/atualizar --}}
                <x-form.footer />

            </div>
            <!-- /.card-body -->

        </form>

    </div>
    <!-- /.col do form -->


    <br>
    <br>


</x-dashboard-layout>
