<nav class="main-header navbar navbar-expand navbar-orange navbar-light js-navbar">

    <!-- left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item">

            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fa-solid fa-bars fa-lg"></i>
            </a>

        </li>


        <li class="nav-item d-none d-sm-inline-block">

            <a class="nav-link text-bold" href="#">
                Bem-vindo(a), {{ Auth::user()->name }}
            </a>

        </li>

    </ul>
    <!-- ./left navbar links -->


    <!-- right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Navbar Search -->
        <li class="nav-item">

            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>


            <div class="navbar-search-block">

                <form class="form-inline">

                    <div class="input-group input-group-sm">

                        <input class="form-control form-control-navbar bg-light" type="search" aria-label="pesquisa"
                               placeholder="Pesquisar..." />


                        <div class="input-group-append">

                            <button class="btn btn-navbar" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>


                            <button class="btn btn-navbar" data-widget="navbar-search" type="button">
                                <i class="fa-solid fa-xmark"></i>
                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </li>
        <!-- ./Navbar Search -->





        <!-- Dark mode icons -->
        <li class="nav-item">

            <a class="nav-link js-dark-mode" href="#" role="button">

                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-sun"></i>

            </a>

        </li>


        <li class="nav-item">

            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fa-solid fa-expand"></i>
            </a>

        </li>
        <!-- ./Dark mode icons -->


        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown user-menu">

            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <img class="user-image img-circle elevation-2 mr-0 bg-white" src="{{ Vite::icon('user.png') }}"
                     alt="Imagem do usuário" />
            </a>


            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px">

                <li class="user-header bg-yellow">

                    <img class="img-circle elevation-2 bg-white" src="{{ Vite::icon('user.png') }}"
                         alt="{{ Auth::user()->name }}" />


                    <h6 class="mt-2 mb-0">{{ Auth::user()->name }}</h6>


                    <p class="text-uppercase mt-0">{{ Auth::user()->role->translation }}</p>

                </li>


                <!-- User-footer -->
                <li class="user-footer">

                    <div class="row">

                        <div class="col-sm-6 py-1">

                            <a class="btn btn-primary btn-block" href="{{ route('profile.edit') }}">
                                <i class="fa-solid fa-pen-to-square mr-1"></i>
                                Perfil
                            </a>

                        </div>


                        <div class="col-sm-6 py-1">

                            <form action="{{ route('logout') }}" method="POST">

                                @csrf

                                <a class="btn btn-danger btn-block" href="route('logout')"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa-solid fa-right-from-bracket mr-1"></i>
                                    Sair
                                </a>

                            </form>

                        </div>

                    </div>

                </li>
                <!-- ./User-footer -->

            </ul>

        </li>
        <!-- ./Messages Dropdown Menu -->

    </ul>
    <!-- ./Right navbar links -->
</nav>
