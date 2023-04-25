<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Visualizar Professor</x-slot>


    <!-- col do form -->
    <div class="col-sm-8 mx-auto">

        <div class="card-body">

            {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
            <x-alert.msg />


            {{-- Header do form --}}
            <x-form.header-btn name="teacher" :person="$teacher" />


            {{-- Dados pessoais --}}
            <x-form.personal-data :person="$teacher" />


            {{-- Dados do endereço --}}
            <x-form.address :person="$teacher" />

        </div>
        <!-- /.card-body -->

    </div>
    <!-- col do form -->


    <br>
    <br>

</x-dashboard-layout>
