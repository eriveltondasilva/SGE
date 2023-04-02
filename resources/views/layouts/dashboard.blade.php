<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- HEAD -->
@include('layouts.partials._head')
<!-- ./HEAD -->


<!-- BODY -->

<body class="hold-transition sidebar-mini">


    <!-- wrapper -->
    <div class="wrapper">


        <!-- navbar -->
        @include('layouts.partials._navbar')
        <!-- ./navbar -->


        <!-- sidebar -->
        @include('layouts.partials._sidebar')
        <!-- ./sidebar -->


        <!-- content-wrapper -->
        <div class="content-wrapper">


            <!-- content-header -->
            @include('layouts.partials._header')
            <!-- ./content-header -->


            {{ $slot }}


        </div>
        <!-- ./content-wrapper -->


        <!-- main footer -->
        @include('layouts.partials._footer')
        <!-- /.main footer -->


    </div>
    <!-- ./wrapper -->


</body>
<!-- ./BODY -->


</html>
