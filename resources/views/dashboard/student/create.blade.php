<x-dashboard-layout>

    {{-- browser page title --}}
    <x-slot name="head_title">Cadastrar Aluno</x-slot>
    {{-- ./browser page title --}}


    {{-- col do form --}}
    <div class="col-sm-8 m-auto pt-3">

        <form method="POST" action="{{ route('student.store') }}">
            @csrf


            <div class="card-body">

                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                @if (session('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">

                        {{ session('msg') }}
                        <a class="alert-link" href="{{ route('student.show', $last_student) }}">
                            Clique aqui
                        </a>
                        para ver o último aluno cadastrado.
                        <button class="close" data-dismiss="alert" type="button" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </button>

                    </div>
                @endif


                {{-- Dados pessoais --}}
                <x-form.personal-data />


                {{-- Dados do responsáveis --}}
                <x-form.relative-data />


                {{-- Dados do endereço --}}
                <x-form.address />


                {{-- Outros datos --}}
                <x-form.other-data />


                {{-- Botões: cancelar e cadastrar/atualizar --}}
                <x-form.footer />

            </div>
            {{-- /.card-body --}}

        </form>

    </div>
    {{-- /.col do form --}}


    <br>
    <br>


</x-dashboard-layout>
