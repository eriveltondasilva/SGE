<aside class="main-sidebar sidebar-expand sidebar-dark-warning elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        
        <img
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        src="dist/img/icons/school.jpg"
        />
        
        <span class="brand-text font-weight-light">
            {{ Auth::user()->school_id }}
        </span>
        
    </a>
    <!-- ./Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-2">
            
            <div class="input-group" data-widget="sidebar-search">
                
                <input
                class="form-control
                form-control-sidebar"
                type="search"
                placeholder="Pesquisar..."
                aria-label="Search"
                />

                <div class="input-group-append">

                    <button class="btn btn-sidebar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </div>

            </div>

        </div>
        <!-- ./SidebarSearch Form -->


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

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p class="text-uppercase">
                            painel
                        </p>
                    </a>

                </li>
                <!-- ./Menu: painel -->


                <div class="sidebar__line"></div>


                <!-- Menu: calendário -->
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-calendar-days"></i>
                        <p class="text-uppercase">
                            calendário
                        </p>
                    </a>

                </li>
                <!-- ./Menu: calendário -->


                <!-- Menu: horário -->
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-clock"></i>
                        <p class="text-uppercase">
                            horário
                        </p>
                    </a>

                </li>
                <!-- /Menu: horário -->


                <!-- Menu: documentos -->
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-circle-exclamation"></i>
                        <p class="text-uppercase">
                            documentos
                        </p>
                    </a>

                </li>
                <!-- ./Menu: documentos -->


                <div class="sidebar__line"></div>


                <!-- Menu: matrícula -->
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-id-card"></i>
                        <p class="text-uppercase">
                            matrícula
                        </p>
                    </a>

                </li>
                <!-- ./Menu: matrícula -->


                <!-- Menu: alunos -->
                <!-- <li class="nav-item menu-open"> -->
                <li class="nav-item">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fa-solid fa-user"></i>

                        <p class="text-uppercase">
                            aluno
                            <i class="right fa-solid fa-angle-left"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>
                                    Lista de alunos
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>
                                    page 2
                                </p>

                            </a>

                        </li>

                    </ul>
                    
                </li>
                <!-- ./Menu: alunos -->


                <!-- Menu: turmas -->
                <li class="nav-item">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fa-solid fa-users"></i>
                        <p class="text-uppercase">
                            turma
                            <i class="right fa-solid fa-angle-left"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="nav-icon fa-regular fa-circle"></i>

                                <p>
                                    Lista de turmas
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="nav-icon fa-regular fa-circle"></i>

                                <p>
                                    page 2
                                </p>
                            </a>

                        </li>

                    </ul>

                </li>
                <!-- /Menu: turmas -->


                <!-- Menu: professor -->
                <li class="nav-item">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fa-solid fa-chalkboard-user"></i>

                        <p class="text-uppercase">
                            professor
                            <i class="right fa-solid fa-angle-left"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>
                                    Lista de professores
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>
                                    page 2
                                </p>
                            </a>

                        </li>

                    </ul>

                </li>
                <!-- ./Menu: professores -->


                <div class="sidebar__line"></div>


                <!-- Menu: redes sociais -->
                <li class="nav-header text-uppercase mb-1">
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

                </div>
                <!-- ./Menu: redes sociais -->

            </ul>

        </nav>
        <!-- ./sidebar-menu -->

    </div>
    <!-- ./sidebar -->
    
</aside>
