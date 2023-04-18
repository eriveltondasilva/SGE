<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar Professor</x-slot>


    <!-- col do form -->
    <div class="col-sm-8 mx-auto">

        <form action="{{ route('teacher.store') }}" method="POST">

            @csrf


            <div class="card-body">


                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                <x-alert.msg name="teacher" text="Professor" :person="$lastTeacher" />


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
    <!-- /.col do form -->


    <br>
    <br>

</x-dashboard-layout>
