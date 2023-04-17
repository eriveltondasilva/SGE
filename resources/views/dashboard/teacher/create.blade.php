<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar professor</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf


            <div class="card-body">

                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                @if (session('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('msg') }}
                        <a class="alert-link" href="{{ route('teacher.show', $last_teacher) }}">
                            Clique aqui
                        </a>
                        para ver o último professor cadastrado.
                        <button class="close" data-dismiss="alert" type="button" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </button>
                    </div>
                @endif


                {{-- Dados pessoais --}}
                <x-form.personal-data />


                {{-- Dados do endereço --}}
                <x-form.address />


                {{-- Botões: cancelar e cadastrar/atualizar --}}
                <x-form.footer />

            </div>
            <!-- /.card-body -->

        </form>

    </div>
    <!-- col do form -->


    <br>
    <br>


</x-dashboard-layout>
