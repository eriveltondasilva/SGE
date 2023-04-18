<x-dashboard-layout>

    <!-- browser page title -->
    <x-slot name="head_title">Página Inicial</x-slot>


    {{-- <x-alert-msg></x-alert-msg> --}}


    <!-- $infobox -->
    <x-slot name="infobox">

        <!-- InfoBoxes -->
        <div class="row">

            <!-- 1ª Box: alunos -->
            <div class="col-lg-3 col-6">

                {{-- <div class="small-box bg-info"> --}}
                <div class="small-box bg-primary">

                    <div class="inner">

                        <h3>{{ $students }}</h3>
                        <p>Alunos</p>

                    </div>


                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>


                    <a class="small-box-footer" href="{{ route('student.index') }}">
                        Lista de alunos
                        <i class="fa-solid fa-circle-right ml-1"></i>
                    </a>

                </div>

            </div>
            <!-- /.Box 1 -->


            <!-- 2ª Box: turmas -->
            <div class="col-lg-3 col-6">

                {{-- <div class="small-box bg-success"> --}}
                <div class="small-box bg-warning">

                    <div class="inner">

                        <h3>0</h3>
                        <p>Turmas</p>

                    </div>


                    <div class="icon">
                        <i class="fa-solid fa-users"></i>
                    </div>


                    <a class="small-box-footer" href="#">
                        Mais informações
                        <i class="fa-solid fa-circle-right ml-1"></i>
                    </a>

                </div>

            </div>
            <!-- /.Box 2 -->


            <!-- 3ª Box: alunos -->
            <div class="col-lg-3 col-6">

                {{-- <div class="small-box bg-maroon"> --}}
                <div class="small-box bg-primary">

                    <div class="inner">

                        <h3>{{ $teachers }}</h3>
                        <p>Professores</p>

                    </div>


                    <div class="icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>


                    <a class="small-box-footer" href="{{ route('teacher.index') }}">
                        Lista de Professores
                        <i class="fa-solid fa-circle-right ml-1"></i>
                    </a>

                </div>
            </div>
            <!-- /.Box 3 -->


            <!-- 4ª Box: alunos -->
            <div class="col-lg-3 col-6">

                {{-- <div class="small-box bg-danger"> --}}
                <div class="small-box bg-warning">

                    <div class="inner">

                        <h3>2023</h3>
                        <p>Ano Letivo</p>

                    </div>


                    <div class="icon">
                        <i class="fa-solid fa-calendar"></i>
                    </div>


                    <a class="small-box-footer" href="#">
                        Mais informações
                        <i class="fa-solid fa-circle-right ml-1"></i>
                    </a>

                </div>

            </div>
            <!-- /.Box 4 -->

        </div>
        <!-- /.InfoBoxes -->

    </x-slot>
    <!-- /.infobox -->


    <!-- Card body -->
    <div class="card-body">

        <h5 class="card-title">
            Título do card
        </h5>

        <p class="card-text">
            Erivelton da Silva Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            In aspernatur quidem aperiam impedit ratione sapiente rem aut excepturi?
            Ex nam quibusdam ipsa quam excepturi, perferendis nostrum nihil alias possimus
            obcaecati.
        </p>

        <a class="card-link" href="#">
            Card link
        </a>

        <a class="card-link" href="#">
            Another link
        </a>


    </div>
    <!-- ./Card body -->

    <br />
    <br />
    <br />
    <br />
    <br />


</x-dashboard-layout>
