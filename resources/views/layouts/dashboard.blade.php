<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- head -->
@include('layouts.partials._head')
<!-- /head -->


<body class="hold-transition sidebar-mini">

    <!-- wrapper -->
    <div class="wrapper">

        <!-- navbar -->
        @include('layouts.partials._navbar')
        <!-- /.navbar -->


        <!-- sidebar -->
        @include('layouts.partials._sidebar')
        <!-- /.sidebar -->


        <!-- content-wrapper -->
        <div class="content-wrapper">

            <!-- content-header -->
            @include('layouts.partials._header')
            <!-- /.content-header -->


            <!-- main content -->
            <main class="content">

                <!-- container-fluid -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row">

                        <!-- col-lg-12 -->
                        <div class="col-lg-12">

                            {{ $dashboard_infobox ?? '' }}

                            <!-- card-yellow -->
                            <div class="card card-yellow">

                                {{-- Código para deixar uma linha grossa no início das páginas  --}}
                                <div class="card-header">
                                    <h5></h5>
                                </div>


                                {{ $slot }}

                            </div>
                            <!-- /.card-yellow -->

                        </div>
                        <!-- /.col-lg-12 -->

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </main>
            <!-- /.main content -->

        </div>
        <!-- /.content-wrapper -->


        @include('layouts.partials._footer')

    </div>
    <!-- /.wrapper -->

</body>

</html>
