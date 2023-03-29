<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- #HEAD -->
@include('layouts.partials._head')

<!-- #BODY -->

<body class="hold-transition sidebar-mini">

    <!-- *Wrapper -->
    <div class="wrapper">

        <!-- *Navbar -->
        @include('layouts.partials._navbar')

        <!-- Main Sidebar Container -->
        @include('layouts.partials._sidebar')

        <!-- Content Wrapper. Contains page content -->
        {{ $slot }}

        <!-- Main Footer -->
        @include('layouts.partials._footer')

    </div>
    <!-- ./wrapper -->

</body>

</html>
