<x-dashboard-layout>

    {{-- browser page title --}}
    <x-slot name="head_title">Cadastrar Professor</x-slot>


    {{-- col do form --}}
    <div class="col-sm-8 mx-auto">

        <form action="{{ route('teacher.store') }}" method="POST">

            @csrf


            <div class="card-body">

                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                <x-alert.saved-person name="teacher" text="professor" :person="$lastTeacher" />


                {{-- Alerta de erros do formulário --}}
                <x-alert.error />


                {{-- Dados pessoais --}}
                <x-form.personal-data />


                {{-- Dados do endereço --}}
                <x-form.address />


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
