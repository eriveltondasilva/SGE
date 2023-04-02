<header class="content-header">

    <!-- .container-fluid -->
    <div class="container-fluid">

        <!-- .row -->
        <div class="row mb-2">

            <!-- .col -->
            <div class="col-sm-6">

                <h1 class="m-0">
                    {{ $head_title }}
                </h1>

            </div>
            <!-- /.col -->


            <!-- .col -->
            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    {{ $header_breadcrumb ?? '' }}

                </ol>

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</header>

{{-- 
 <!-- breadcrumb header -->
 <x-slot:header_breadcrumb>
    <li class="breadcrumb-item active">
        <a href="#">
            Pagina Inicial
        </a>
    </li>

    <li class="breadcrumb-item active">
        Starter Page
    </li>
</x-slot>
<!-- ./breadcrumb header -->
--}}
