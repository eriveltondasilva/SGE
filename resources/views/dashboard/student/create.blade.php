<x-dashboard-layout>

    {{-- browser page title --}}
    <x-slot name="head_title">Cadastrar Aluno</x-slot>


    {{-- col do form --}}
    <div class="col-sm-8 mx-auto">

        <form action="{{ route('student.store') }}" method="POST">

            @csrf


            <div class="card-body">

                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                <x-alert.saved-person name="student" text="aluno" :person="$lastStudent" />


                @if (count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
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
