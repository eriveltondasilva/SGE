<!DOCTYPE html>
<html lang="pt-BR">
<!-- #HEAD -->

@include('layouts.partials._head')

<!-- #BODY -->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- *Navbar -->
        @include('layouts.partials._navbar')

        <!-- Main Sidebar Container -->
        <aside
            class="main-sidebar sidebar-expand sidebar-dark-warning elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/icons/school.jpg" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" />
                <span class="brand-text font-weight-light">Escola Nome</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar"
                            type="search" placeholder="Pesquisar..."
                            aria-label="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column"
                        data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <!-- *Menu: painel -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-house"></i>
                                <p class="text-uppercase">painel</p>
                            </a>
                        </li>
                        <!-- */Menu: painel -->

                        <div class="sidebar__line"></div>

                        <!-- *Menu: calendário escolar -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i
                                    class="nav-icon fa-solid fa-calendar-days"></i>
                                <p class="text-uppercase">calendário escolar
                                </p>
                            </a>
                        </li>
                        <!-- */Menu: calendário escolar -->

                        <!-- *Menu: horário -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-clock"></i>
                                <p class="text-uppercase">horário</p>
                            </a>
                        </li>
                        <!-- */Menu: horário -->

                        <!-- *Menu: documentos -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i
                                    class="nav-icon fa-solid fa-file-circle-exclamation"></i>
                                <p class="text-uppercase">documentos</p>
                            </a>
                        </li>
                        <!-- */Menu: documentos -->

                        <div class="sidebar__line"></div>

                        <!-- *Menu: matrícula -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-id-card"></i>
                                <p class="text-uppercase">matrícula</p>
                            </a>
                        </li>
                        <!-- */Menu: matricula -->

                        <!-- *Menu: alunos -->
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
                                        <i
                                            class="nav-icon fa-regular fa-circle"></i>
                                        <p>Lista de alunos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i
                                            class="nav-icon fa-regular fa-circle"></i>
                                        <p>page 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- */Menu: alunos -->

                        <!-- *Menu: turmas -->
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
                                        <i
                                            class="nav-icon fa-regular fa-circle"></i>
                                        <p>Lista de turmas</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i
                                            class="nav-icon fa-regular fa-circle"></i>
                                        <p>page 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- */Menu: turmas -->

                        <!-- *Menu: professor -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i
                                    class="nav-icon fa-solid fa-chalkboard-user"></i>
                                <p class="text-uppercase">
                                    professor
                                    <i class="right fa-solid fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i
                                            class="nav-icon fa-regular fa-circle"></i>
                                        <p>Lista de professores</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i
                                            class="nav-icon fa-regular fa-circle"></i>
                                        <p>page 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- */Menu: professores -->

                        <div class="sidebar__line"></div>

                        <!-- *Menu: outros links -->
                        <!-- <li class="nav-item"> -->
                        <!-- <a href="#" class="nav-link"> -->
                        <!-- <i class="nav-icon fa-solid fa-link"></i> -->
                        <!-- <p> -->
                        <!-- Redes Sociais -->
                        <!-- <span class="right badge badge-danger">New</span> -->
                        <!-- </p> -->
                        <!-- </a> -->
                        <!-- </li> -->
                        <!-- */Menu: outros links -->

                        <!-- *Menu: redes sociais -->
                        <li class="nav-header text-uppercase mb-1">redes
                            sociais</li>
                        <div class="row sidebar__icon mx-1">
                            <div class="col-3">
                                <a href="#">
                                    <i
                                        class="fa-brands fa-square-instagram fa-2x"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <i
                                        class="fa-brands fa-square-facebook fa-2x"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <i
                                        class="fa-brands fa-square-whatsapp fa-2x"></i>
                                </a>
                            </div>
                        </div>
                        <!-- */Menu: redes sociais -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        {{ $slot }}

        <!-- Main Footer -->
        @include('layouts.partials._footer')
    </div>
    <!-- ./wrapper -->
</body>

</html>
