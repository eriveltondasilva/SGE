<x-dashboard-layout>

    {{-- browser page title --}}
    <x-slot name="head_title">Cadastrar Aluno</x-slot>


    {{-- col do form --}}
    <div class="col-sm-8 mx-auto">

        <form action="{{ route('student.store') }}" method="POST">

            @csrf


            <div class="card-body">

                {{-- cadastro com sucesso! --}}
                <x-alert.saved-person name="student" text="aluno" :person="$lastStudent" />


                {{-- Alerta de erros do formulário --}}
                <x-alert.error />


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
