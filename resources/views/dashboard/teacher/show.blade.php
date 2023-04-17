<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Visualizar Professor</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <div class="card-body">

            {{-- Componente para retornar mensage: "cadastro atualizado com sucesso!" --}}
            @if (session('msg'))
                <div class="alert alert-info alert-dismissible fade show js-close-alert" role="alert">
                    {{ session('msg') }}
                    <button class="close" data-dismiss="alert" type="button" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </span>
                    </button>
                </div>
            @endif


            <div class="form-group">
                <label class="text-lg" for="#">
                    Matrícula:
                    <span class="font-weight-normal badge badge-secondary text-md">
                        {{ str_pad($teacher->id, 3, '0', STR_PAD_LEFT) }}
                    </span>
                </label>

                {{-- Botão para editar o cadastro --}}
                <div>
                    <a class="btn btn-sm btn-primary px-4" href="{{ route('teacher.edit', $teacher) }}">
                        <i class="fa-solid fa-pen-to-square mr-1"></i>
                        Editar
                    </a>
                </div>
            </div>


            {{-- Dados pessoais --}}
            <x-form.personal-data :person="$teacher" />


            {{-- Dados do endereço --}}
            <x-form.address />

        </div>
        <!-- /.card-body -->

    </div>
    <!-- col do form -->


    <br>
    <br>


</x-dashboard-layout>
