<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Cadastrar Aluno</x-slot>
    <!-- ./browser page title -->


    <!-- col do form -->
    <div class="col-sm-8 m-auto pt-3">

        <form method="POST" action="{{ route('student.store') }}">
            @csrf


            <div class="card-body">

                {{-- Componente para retornar mensage: "cadastro com sucesso!" --}}
                @if (session('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('msg') }}
                        <a href="{{ route('student.show', $last_student) }}" class="alert-link">
                            Clique aqui
                        </a>
                        para ver o último aluno cadastrado.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </button>
                    </div>
                @endif


                <!--  -->
                <x-form.personal-data />


                <!--  -->
                <x-form.relative-data />


                <!--  -->
                <x-form.address />


                <!--  -->
                <x-form.other-data />


                <!-- botões: cancelar e cadastrar -->
                <x-form.footer btn="Cadastrar" />

            </div>
            <!-- /.card-body -->

        </form>

    </div>
    <!-- /.col do form -->

    <br>
    <br>

</x-dashboard-layout>
