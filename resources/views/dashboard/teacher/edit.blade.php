<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Editar Professor</x-slot>


    <!-- col do form -->
    <div class="col-sm-8 mx-auto">

        <form action="{{ route('teacher.update', $teacher) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                <x-form.header-btn name="teacher" :person="$teacher" />


                {{-- Dados pessoais --}}
                <x-form.personal-data :person="$teacher" />


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
