<aside class="main-sidebar sidebar-expand sidebar-light-warning elevation-4 js-sidebar">

    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        
        <img
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        src="dist/img/icons/school.png"
        />
        
        <span class="brand-text font-weight-light">
            Escola
        </span>
        
    </a>
    <!-- ./Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-3">

            <ul
            class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column"
            data-accordion="false"
            data-widget="treeview"
            role="menu"
            >

                <!-- Menu: painel -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" :is_active="request()->routeIs('dashboard')">
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-house"></i>
                        </x-slot>
                        Página Inicial
                    </x-nav.link>

                </li>
                <!-- ./Menu: painel -->


                <div class="sidebar__separator"></div>


                <!-- Menu: calendário -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-calendar-days"></i>
                        </x-slot>
                        Calendário
                    </x-nav.link>
                                        
                </li>
                <!-- ./Menu: calendário -->


                <!-- Menu: horário -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-clock"></i>
                        </x-slot>
                        Horário
                    </x-nav.link>

                </li>
                <!-- /Menu: horário -->


                <!-- Menu: documentos -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-file-circle-exclamation"></i>
                        </x-slot>
                        Documentos
                    </x-nav.link>

                </li>
                <!-- ./Menu: documentos -->


                <div class="sidebar__separator"></div>

                
                <!-- Menu: matrícula -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-id-card"></i>
                        </x-slot>
                        Matrícula
                    </x-nav.link>

                </li>
                <!-- ./Menu: matrícula -->


                <!-- Menu: alunos -->
                <!-- <li class="nav-item menu-open"> -->
                <li class="nav-item">

                    <x-nav.link href="#" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-user"></i>
                        </x-slot>
                        Aluno
                        <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>


                    <!-- Submenu: alunos -->
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-regular fa-circle"></i>
                                </x-slot>
                                lista de alunos
                            </x-nav.link>

                        </li>

                        <li class="nav-item">

                            <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-regular fa-circle"></i>
                                </x-slot>
                                page 2
                            </x-nav.link>

                        </li>

                    </ul>
                    <!-- ./Submenu: alunos -->

                    
                </li>
                <!-- ./Menu: alunos -->


                <!-- Menu: turmas -->
                <li class="nav-item">

                    <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-users"></i>
                        </x-slot>
                        Turma
                        <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>

                    
                    <!-- Submenu: turmas -->
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-regular fa-circle"></i>
                                </x-slot>
                                lista de turmas
                            </x-nav.link>

                        </li>

                        <li class="nav-item">

                            <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-regular fa-circle"></i>
                                </x-slot>
                                page 2
                            </x-nav.link>

                        </li>

                    </ul>
                    <!-- ./Submenu: turmas -->


                </li>
                <!-- /Menu: turmas -->


                <!-- Menu: professor -->
                <li class="nav-item">
                    
                    <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                        <x-slot:icon>
                            <i class="nav-icon fa-solid fa-chalkboard-user"></i>
                        </x-slot>
                        Professor
                        <i class="right fa-solid fa-angle-left"></i>
                    </x-nav.link>
                    
                    
                    <!-- Submenu: professor -->
                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            
                            <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-regular fa-circle"></i>
                                </x-slot>
                                lista de professores
                            </x-nav.link>
                            
                        </li>
                        
                        <li class="nav-item">
                            
                            <x-nav.link :href="route('dashboard')" {{-- :is_active="request()->routeIs('teste')" --}}>
                                <x-slot:icon>
                                    <i class="nav-icon fa-regular fa-circle"></i>
                                </x-slot>
                                page 2
                            </x-nav.link>
                            
                        </li>
                        
                    </ul>
                    <!-- ./Submenu: professor -->

                </li>
                <!-- ./Menu: professores -->


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
                <!-- ./Menu: redes sociais -->

            </ul>

        </nav>
        <!-- ./sidebar-menu -->

    </div>
    <!-- ./sidebar -->
    
</aside>
