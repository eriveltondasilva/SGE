<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Visualizar Aluno</x-slot>


    <!-- col do form -->
    <div class="col-sm-8 mx-auto">

        <div class="card-body">

            {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
            <x-alert.msg name="student" text="Aluno" />


            {{-- Header do form --}}
            <x-form.header-btn name="student" :person="$student" />


            {{-- Dados pessoais --}}
            <x-form.personal-data :person="$student" />


            {{-- Dados do responsáveis --}}
            <x-form.relative-data />


            {{-- Dados do endereço --}}
            <x-form.address :person="$student" />


            {{-- Outros datos --}}
            <x-form.other-data :person="$student" />

        </div>
        <!-- /.card-body -->

    </div>
    <!-- col do form -->


    <br>
    <br>

</x-dashboard-layout>
