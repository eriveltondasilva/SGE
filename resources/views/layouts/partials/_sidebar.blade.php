<aside class="main-sidebar sidebar-expand sidebar-light-warning elevation-4 js-sidebar">

    {{-- torna o menu selecionado aberto --}}
    {{-- <!-- <li class="nav-item menu-open"> --> --}}


    <!-- Brand Logo -->
    <a href="#" class="brand-link">

        {{-- Imagem do logo da escola na sidebar --}}
        {{-- <i class="fa-solid fa-school ml-3 mr-1"></i> --}}
        <img alt="AdminLTE Logo" class="brand-image {{-- img-circle elevation-3 --}}" src="{{ Vite::icon('school.png') }}" />


        <span class="brand-text font-weight-light">
            {{ Auth::user()->userSchool()->first()->short_name }}
        </span>

    </a>
    <!-- /.Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-3">

            <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column" data-accordion="false"
                data-widget="treeview" role="menu">

                <!-- Menu: painel -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" :is_active="request()->routeIs('dashboard')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-house"></i>
                            </x-slot>
                            Página Inicial
                    </x-nav.link>

                </li>
                <!-- /.Menu: painel -->


                <div class="sidebar__separator"></div>


                <!-- Menu: calendário -->
                <li class="nav-item">

                    <x-nav.link href="#" :is_active="request()->routeIs('teste')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-calendar-days"></i>
                            </x-slot>
                            Calendário
                    </x-nav.link>

                </li>
                <!-- /.Menu: calendário -->


                <!-- Menu: horário -->
                <li class="nav-item">

                    <x-nav.link href="#" :is_active="request()->routeIs('teste')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-clock"></i>
                            </x-slot>
                            Horário
                    </x-nav.link>

                </li>
                <!-- /Menu: horário -->


                <!-- Menu: documentos -->
                <li class="nav-item">

                    <x-nav.link href="#" :is_active="request()->routeIs('teste')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-file-circle-exclamation"></i>
                            </x-slot>
                            Documentos
                    </x-nav.link>

                </li>
                <!-- /.Menu: documentos -->


                <div class="sidebar__separator"></div>


                <!-- Menu: caderneta -->
                <li class="nav-item {{-- {{ request()->routeIs('student.*') ? "menu-open" : "" }} --}}">

                    <x-nav.link href="#" {{-- :is_active="request()->routeIs('student.*')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-book"></i>
                            </x-slot>
                            Caderneta
                            <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>


                    <!-- Submenu: caderneta -->
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <x-nav.link href="#" {{-- :is_active="request()->routeIs('student.create')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    planos de aula
                            </x-nav.link>

                        </li>

                        <li class="nav-item">

                            <x-nav.link href="#" {{-- :is_active="request()->routeIs('student.create')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    cadastrar notas
                            </x-nav.link>

                        </li>

                    </ul>
                    <!-- /.Submenu: caderneta -->


                </li>
                <!-- /.Menu: caderneta -->


                <div class="sidebar__separator"></div>


                <!-- Menu: alunos -->
                <li class="nav-item {{ request()->routeIs('student.*') ? 'menu-open' : '' }}">

                    <x-nav.link href="#" :is_active="request()->routeIs('student.*')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-user"></i>
                            </x-slot>
                            Aluno
                            <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>


                    <!-- Submenu: alunos -->
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <x-nav.link :href="route('student.create')" :is_active="request()->routeIs('student.create')">
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    cadastrar aluno
                            </x-nav.link>

                        </li>

                        <li class="nav-item">

                            <x-nav.link :href="route('student.index')" :is_active="request()->routeIs('student.index')">
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    lista de alunos
                            </x-nav.link>

                        </li>

                    </ul>
                    <!-- /.Submenu: alunos -->


                </li>
                <!-- /.Menu: alunos -->


                <!-- Menu: turmas -->
                <li class="nav-item {{ request()->routeIs('school_class.*') ? 'menu-open' : '' }}">

                    <x-nav.link href="#" :is_active="request()->routeIs('school_class.*')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-users"></i>
                            </x-slot>
                            Turma
                            <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>


                    <!-- Submenu: turmas -->
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <x-nav.link :href="route('school_class.create')" :is_active="request()->routeIs('school_class.create')">
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    cadastrar turma
                            </x-nav.link>

                        </li>

                        <li class="nav-item">

                            <x-nav.link :href="route('school_class.index')" :is_active="request()->routeIs('school_class.index')">
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    ver turmas
                            </x-nav.link>

                        </li>

                    </ul>
                    <!-- /.Submenu: turmas -->


                </li>
                <!-- /Menu: turmas -->


                <!-- Menu: professor -->
                <li class="nav-item {{ request()->routeIs('teacher.*') ? 'menu-open' : '' }}">

                    <x-nav.link href="#" :is_active="request()->routeIs('teacher.*')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-chalkboard-user"></i>
                            </x-slot>
                            Professor
                            <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>


                    <!-- Submenu: professor -->
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <x-nav.link :href="route('teacher.create')" :is_active="request()->routeIs('teacher.create')">
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    cadastrar professor
                            </x-nav.link>

                        </li>

                        <li class="nav-item">

                            <x-nav.link :href="route('teacher.index')" :is_active="request()->routeIs('teacher.index')">
                                <x-slot:icon>
                                    <i class="nav-icon fa-solid fa-caret-right"></i>
                                    </x-slot>
                                    lista de professores
                            </x-nav.link>

                        </li>

                    </ul>
                    <!-- /.Submenu: professor -->

                </li>
                <!-- /.Menu: professores -->


                <div class="sidebar__separator"></div>


                <!-- Menu: redes sociais -->
                {{-- <li class="nav-header text-uppercase mb-1">
                    redes sociais
                </li>

                <div class="row sidebar__icon mx-1">

                    <div class="col-3">

                        <a href="#">
                            <i class="fa-brands fa-square-instagram fa-2x"></i>
                        </a>

                    </div>

                    <div class="col-3">

                        <a href="#">
                            <i class="fa-brands fa-square-facebook fa-2x"></i>
                        </a>

                    </div>
                    <div class="col-3">

                        <a href="#">
                            <i class="fa-brands fa-square-whatsapp fa-2x"></i>
                        </a>

                    </div>

                </div> --}}
                <!-- /.Menu: redes sociais -->

            </ul>

        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->

</aside>
