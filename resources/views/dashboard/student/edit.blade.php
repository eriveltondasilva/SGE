<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Editar Aluno</x-slot>


    <!-- col do form -->
    <div class="col-sm-8 mx-auto">

        <form action="{{ route('student.update', $student) }}" method="POST">

            @csrf
            @method('PUT')


            <div class="card-body">

                <x-form.header-btn name="student" :person="$student" />


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
